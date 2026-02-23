@extends('siswa.layouts')

@section('content')

<div class="flex space-x-3 ">
    @forelse ($orders as $order)
        <div class="border rounded-xl p-5 flex flex-col space-y-2">


            <p>
              Nama Buku :  {{ $order->book->nama }}
            </p>
            <p>
              Tanggal Pinjam :  {{ $order->tanggal_pinjam }}
            </p>
            <p>
              Status :
                @if ($order->tanggal_kembali == null)
              <span class="bg-red-600 rounded-xl text-red-100"> Belum dikembalikan</span>    
              @endif

            </p>

            <form action="/siswa/return/{{ $order->id }}" method="post">
            @csrf 
                <button type="submit" class="hover:cursor-pointer">Kembalikan</button>
            </form>



            


        </div>
    @empty
    <div class="border rounded-xl p-5 flex flex-col space-y-2">


           
        EMPTY



            


        </div>
        
    @endforelse

</div>

@endsection