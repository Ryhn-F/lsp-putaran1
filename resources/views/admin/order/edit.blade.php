<div>

    <form method="post">
        @csrf
        @method("PUT")

        <label for="nama">Peminjam</label>
        <select  name="anggota_id"> 
            <option value="" disabled selected > Select Anggota</option>
            @foreach ($anggotas as $anggota )
            <option value="{{ $anggota->id }}" {{ $order->anggota_id == $anggota->id ? 'selected' : '' }} >{{ $anggota->nama }} {{ $anggota->kelas }}</option>
            @endforeach
        </select>

        <label for="nama"> Buku Yang Dipinjam</label>
        <select  name="book_id">
             <option value="" disabled selected > Select Book</option> 

            @foreach ($books as $book )

            <option value="{{ $book->id }}" {{ $order->book_id == $book->id ? 'selected' : '' }} > {{ $book->nama }} by {{ $book->pengarang }}</option>
                
            @endforeach
        </select>

        <label for="nama"> Tanggal Pinjam</label>
        <input type="datetime-local" name="tanggal_pinjam" value="{{ date('Y-m-d\TH:i', strtotime($order->tanggal_pinjam)) }}" required>


        <label for="nama"> Tanggal Kembali</label>
        <input type="datetime-local" name="tanggal_kembali" value="{{ $order->tanggal_kembali ? date('Y-m-d\TH:i', strtotime($order->tanggal_pinjam)) :'' }}" >

        

      

        <button type="submit"> update </button>
    </form>
</div>