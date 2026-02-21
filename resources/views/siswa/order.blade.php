@extends('siswa.layouts')

@section('content')

<div class="flex space-x-5">
@forelse ($books as $book )

<div class="border rounded-2xl w-fit h-fit p-5 flex flex-col space-y-2">

    <p>Nama :{{ $book->nama }}</p>

    <p>Pengarang : {{  $book->pengarang }}</p>

    <p>Tahun Terbit : {{ $book->tahun_terbit }}</p>

    <p>stok : {{ $book->stock }}</p>


    <form action="/siswa/order/{{ $book->id }}" method="post" >
    @csrf
    
    <button type="submit" class="hover:cursor-pointer">
        pinjam buku

    </button>
    </form>

    

</div>
    
@empty
    
@endforelse

</div>



@endsection