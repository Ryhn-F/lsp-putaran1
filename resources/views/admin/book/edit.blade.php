<div>

    <form method="post">
        @csrf
        @method("PUT")

        <label for="nama">Nama Buku</label>
        <input type="text" name="nama" value="{{ $book->nama }}">

        <label for="nama"> Penerbit</label>
        <input type="text" name="penerbit" value="{{ $book->penerbit }}">

        <label for="nama">pengarang</label>
        <input type="text" name="pengarang" value="{{ $book->pengarang }}">

        <label for="nama">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}">

        <label for="nama">Stok</label>
        <input type="number" name="stock" value="{{ $book->stock }}">

        <button type="submit"> Update </button>
    </form>
</div>