<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function OrderCreate(){
        $books = Book::where('stock', '>',0)->get();


        return view('siswa.order',compact('books'));
    }


    public function OrderStore(string $id){

        $user = Auth::user();

        $book = Book::findOrFail($id);

        $orderData = [
            'anggota_id' => $user->anggota?->id,
            'book_id' => $book->id,
            'tanggal_pinjam' => now()
        ];

        $book->decrement('stock');

        Order::create($orderData);

        return redirect('/siswa/dashboard')->with('success','Buku berhasil dipinjam');
        
    }
}
