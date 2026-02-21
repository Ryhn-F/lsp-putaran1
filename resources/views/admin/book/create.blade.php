<div>
    <form method="post">
        @csrf 
        <label for="nama"> Nama Buku</label>
        <input type="text" name="nama">
        
        <label for="penerbit"> Penerbit</label>
        <input type="text" name="penerbit">
        
        <label for="pengarang"> Pengarang</label>
        <input type="text" name="pengarang">

        <label for="tahun_terbit"> tahun Terbit</label>
        <input type="number" name="tahun_terbit">

        <label for="stock"> stok</label>
        <input type="number" name="stock">

        <button type="submit"> Create </button>
    </form>
</div>