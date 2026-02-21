<div>

    <form method="post">
        @csrf

        <label for="nama">Peminjam</label>
        <select  name="anggota_id"> 
            <option value="" disabled selected> Select Anggota</option>
            @foreach ($anggotas as $anggota )
            <option value="{{ $anggota->id }}" >{{ $anggota->nama }} {{ $anggota->kelas }}</option>
            @endforeach
        </select>

        <label for="nama"> Buku Yang Dipinjam</label>
        <select  name="book_id">
             <option value="" disabled selected> Select Book</option> 

            @foreach ($books as $book )

            <option value="{{ $book->id }}" > {{ $book->nama }} by {{ $book->pengarang }}</option>
                
            @endforeach
        </select>

        <label for="nama"> Tanggal Pinjam</label>
        <input type="datetime-local" name="tanggal_pinjam">


      

        <button type="submit"> create </button>
    </form>
</div>