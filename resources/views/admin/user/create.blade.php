

<div>

    <form method="post">

        @csrf

        
        <label for="username"> Username</label>
        <input type="text" name="username">
        <label for="password"> Password</label>
        <input type="password" name="password">
        <label for="nis"> NIS</label>
        <input type="text" name="nis">
        <label for="nama"> Nama Anggota</label>
        <input type="text" name="nama">
        <label for="kelas"> Kelas</label>
        <input type="text" name="kelas">
        <label for="jurusan"> Jurusan</label>
        <input type="text" name="jurusan">

        <button type="submit">
            Create
        </button>
    </form>
</div>