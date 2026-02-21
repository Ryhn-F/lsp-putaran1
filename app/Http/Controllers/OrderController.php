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
       $orders = Order::with(['anggota', 'book'])->get()->all();

       return view('admin.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggotas = Anggota::get()->all();
        $books = Book::get()->all();

        return view('admin.order.create', compact(['anggotas', 'books']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $validate = $request->validate([
            'anggota_id' => 'required',
            'book_id' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        Order::create($validate);

        return redirect('/orders')->with('success','Order Berhasil dibuat');
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

        return view('admin.order.edit', compact(['order', 'books','anggotas']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

          $validate = $request->validate([
            'anggota_id' => 'required',
            'book_id' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        if($request->filled('tanggal_kembali')){
            $validate['tanggal_kembali'] = $request->tanggal_kembali;
        }


        $order->update($validate);

        return redirect('orders')->with('success','Data Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);

        return back()->with('success','data wes dihapus');
    }
}
