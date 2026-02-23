<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function show(){
        return view('auth.register');
    }
    
    public function register(Request $request){

        $anggotaData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        $anggota = Anggota::create($anggotaData);

        $userData = $request->validate([
            'username' =>'required',
            'password' => 'required'
        ]);

        $userData['anggota_id'] = $anggota->id;
        $userData['role'] = 'siswa';

        User::create($userData);

        return redirect('/login')->with('success','Akun berhasil dibuat');
        
    }
}
