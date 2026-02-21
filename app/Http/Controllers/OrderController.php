<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with(['anggota', 'book'])->get();

        return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::get()->all();
        $anggotas = Anggota::get()->all();
        return view('admin.order.create', compact('books','anggotas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate =  $request->validate([
            'anggota_id' =>'required',
            'book_id' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        $book = Book::findOrFail($request->book_id);

        $book->decrement('stock');


        Order::create($validate);



        return redirect('/orders')->with(['success' => 'Order Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $order = Order::findOrFail($id);
        $books = Book::get()->all();
        $anggotas = Anggota::get()->all();
        return view('admin.order.edit', compact('books','anggotas','order'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $order = Order::findOrFail($id);

        $validate =  $request->validate([
            'anggota_id' => 'required',
            'book_id' => 'required',
            'tanggal_kembali' => 'required',
        ]);

         if ($request->filled('tanggal_kembali') && $order->tanggal_kembali === null){
            $validate['tanggal_kembali'] = $request->tanggal_kembali;
            $book = Book::findOrFail($request->book_id);
            $book->increment('stock');
        }


        $order->update($validate);

        return redirect('/orders')->with(['success' => 'Transaksi berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $book = Book::findOrFail($order->book_id);

        $book->increment('stock');

        Order::destroy($id);



        return back()->with(['success' => 'Order Berhasil Dihapus']);
    }
}
