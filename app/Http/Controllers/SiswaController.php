<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
   public function OrderCreate(){
    $books = Book::where('stock', '>', 0)->get();

    return view('siswa.order', compact('books'));
   }


   public function OrderStore(string $id){
    $user = Auth::user();

    $anggota = Anggota::findOrFail($user->anggota_id);

   

    $orderData['anggota_id'] = $anggota->id;

    $book = Book::findOrFail($id);

    $orderData['book_id'] = $book->id;

    $orderData['tanggal_pinjam'] = now();

    $book->decrement('stock');


    Order::create($orderData);


    return redirect('/siswa/dashboard')->with(['success' => 'Pinjam buku berhasil']);


   }
}
