<div>

    <form method="post">
        @csrf

        <label for="nama">Username</label>
        <input type="text" name="username">

        <label for="nama"> Password</label>
        <input type="password" name="password">

        <label for="nama"> NIS</label>
        <input type="text" name="nis">


        <label for="nama"> Nama anggota</label>
        <input type="text" name="nama">


        <label for="nama">Kelas</label>
        <input type="text" name="kelas">

        <label for="nama">Jurusan</label>
        <input type="text" name="jurusan">

      

        <button type="submit"> create </button>
    </form>
</div>