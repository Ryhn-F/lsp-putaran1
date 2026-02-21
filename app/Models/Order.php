<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'anggota_id',
        'book_id',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];


    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
