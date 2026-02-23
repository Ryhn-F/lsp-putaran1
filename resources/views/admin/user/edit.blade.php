@extends('admin.layouts')


@section('content')
<div>

    <form method="post">

        @csrf

        @method("PUT")

        
        <label for="username"> Username</label>
        <input type="text" name="username" value="{{ $user->username }}">
        <label for="password"> Password</label>
        <input type="password" name="password">
        <label for="nis"> NIS</label>
        <input type="text" name="nis" value="{{ $user->anggota?->nis }}">
        <label for="nama"> Nama Anggota</label>
        <input type="text" name="nama" value="{{ $user->anggota?->nama }}">
        <label for="kelas"> Kelas</label>
        <input type="text" name="kelas" value="{{ $user->anggota?->kelas }}">
        <label for="jurusan"> Jurusan</label>
        <input type="text" name="jurusan" value="{{ $user->anggota?->jurusan }}">
        <label for="jurusan"> role</label>
        <select name="role" id="role" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-lg focus:border-slate-800 focus:ring-1 focus:ring-slate-800 outline-none transition-all text-slate-800" onchange="toggleAnggotaFields()">
        <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>Member (Siswa)</option>
        <option value="admin" {{  $user->role == 'admin' ? 'selected' : '' }}>Administrator</option>
        </select>
        

        <button type="submit">
            update
        </button>
    </form>
</div>

@endsection