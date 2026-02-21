@extends('siswa.layouts')


@section('content')

<div class="flex space-x-2 align-items-center justify-center">
    @forelse ($books as $book )
        
<div class="border rounded-xl w-fit h-fit p-5 flex flex-col space-y-2">

    <p>
        Nama Buku : {{ $book->nama }}
    </p>
    <p>
        Pengarang : {{  $book->pengarang }}
    </p>

    <p>
        Penerbit : {{ $book->penerbit }}
    </p>

    <p>
        Tahun Terbit : {{ $book->tahun_terbit }}
    </p>

    <p>
        stok : {{ $book->stock }}
    </p>

    <form action="/siswa/order/{{ $book->id }}" method="post">
        @csrf      
        <button type="submit" class="hover:cursor-pointer">
            Pinjam Buku

        </button>
    </form>
</div>
    @empty

    <div class="border rounded-xl w-50 h-50 p-5 flex space-y-2">

   
        <p>
            Empty
        </p>
</div>
    
        
    @endforelse


</div>


@endsection