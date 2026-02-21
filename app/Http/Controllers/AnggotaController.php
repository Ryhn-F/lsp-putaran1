<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('anggota')->get();

        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userData = $request->validate([
            'username' => 'required',
        ]);


        $anggotaData = $request->validate([
            'nama' =>'required',
            'nis' =>'required',
            'kelas' =>'required',
            'jurusan' =>'required',
        ]);


        $anggota = Anggota::create($anggotaData);

        $userData['anggota_id'] = $anggota->id;
        $userData['password'] = Hash::make($request->password);
        $userData['role'] = 'siswa';


        User::create($userData);


        return redirect('/users')->with('success','User Behasil dibuat');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $user = User::findOrFail($id);

        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $anggota = Anggota::findOrFail($user->anggota_id);

        $userData = $request->validate([
            'username' => 'required',
            'role' => 'required'
        ]);

         $anggotaData = $request->validate([
            'nama' =>'required',
            'nis' =>'required',
            'kelas' =>'required',
            'jurusan' =>'required',
        ]);

        $anggota->update($anggotaData);

        $userData['anggota_id'] = $anggota->id;

        if($request->filled('password')){
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        return redirect('/users')->with('success','Data user berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $anggota = Anggota::findOrFail($user->anggota_id);

        $anggota->destroy($user->anggota_id);
        $user->destroy($id);

        return back()->with('success','Data berhasil dihapus');
    }
}
