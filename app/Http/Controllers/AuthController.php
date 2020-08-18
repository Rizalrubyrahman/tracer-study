<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Alumni;
use App\User;
use App\Http\Requests\RegistrasiRequest;

class AuthController extends Controller
{
    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function prosesRegistrasi(RegistrasiRequest $request)
    {
        //upload gambar`
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
        //input data user
            $user = new User;
            $user->name = $request->nama;
            $user->role = 'user';
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->remember_token = Str::random(60);
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
        return redirect('/login');
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            if(auth()->user()->role == 'user'){
                 return redirect('/');
            }else{
                return redirect('/admin');
            }
        }

        session()->flash('error','Username atau password yang anda masukan salah');
        return redirect()->back();
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    


    
}
