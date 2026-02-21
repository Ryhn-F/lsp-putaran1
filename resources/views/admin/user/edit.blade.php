<div>

    <form method="post">
        @csrf
        @method("PUT")

        <label for="nama">Username</label>
        <input type="text" name="username" value="{{ $user->username }}">

        <label for="nama"> Password</label>
        <input type="password" name="password">

        <label for="nama"> NIS</label>
        <input type="text" name="nis" value="{{ $user->anggota?->nis }}">


        <label for="nama"> Nama anggota</label>
        <input type="text" name="nama" value="{{ $user->anggota?->nama }}">


        <label for="nama">Kelas</label>
        <input type="text" name="kelas" value="{{ $user->anggota?->kelas }}">

        <label for="nama">Jurusan</label>
        <input type="text" name="jurusan" value="{{ $user->anggota?->jurusan }}">

          <label for="nama">Role</label>
        <select type="text" name="role" value="{{ $user->anggota?->kelas }}">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}> Admin</option>
            <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}> Siswa</option>
            </select>

        
      

        <button type="submit"> Update </button>
    </form>
</div>