<div>
    <form method="post">
        @csrf 
        @method("PUT")
        <label for="nama"> Nama Buku</label>
        <input type="text" name="nama" value="{{ $book->nama }}">
        
        <label for="penerbit"> Penerbit</label>
        <input type="text" name="penerbit" value="{{ $book->penerbit }}">
        
        <label for="pengarang"> Pengarang</label>
        <input type="text" name="pengarang" value="{{ $book->pengarang }}">

        <label for="tahun_terbit"> tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}">

        <label for="stock"> stok</label>
        <input type="number" name="stock" value="{{ $book->stock }}">

        <button type="submit"> update </button>
    </form>
</div>