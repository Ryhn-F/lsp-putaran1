<div>

    <form method="post">
        @csrf

        <label for="nama">Nama Buku</label>
        <input type="text" name="nama">

        <label for="nama"> Penerbit</label>
        <input type="text" name="penerbit">

        <label for="nama">pengarang</label>
        <input type="text" name="pengarang">

        <label for="nama">Tahun Terbit</label>
        <input type="number" name="tahun_terbit">

        <label for="nama">Stok</label>
        <input type="number" name="stock">

        <button type="submit"> create </button>
    </form>
</div>