<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrasiRequest;
use Illuminate\Http\Request;
use App\Alumni;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }
    public function registrasi()
    {
        return view('user.registrasi');
    }
    public function prosesRegistrasi(RegistrasiRequest $request)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $tempat_file = public_path('/images');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move($tempat_file, $fileName);
            $gambar = $fileName;
        } else {
            $gambar = NULL;
        }
            $user = new User;
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save(); 


            Alumni::create([
                'user_id' => $user->id,
                'nama' => $request->nama,
                'jurusan' => $request->jurusan,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status' => $request->status,
                'no_telepon' => $request->no_telepon,
                'gambar' => $gambar,
            ]);
        return redirect('/');
    }
}
