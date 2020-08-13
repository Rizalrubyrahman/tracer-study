<?php

namespace App\Http\Controllers;


use App\Http\Requests\RegistrasiRequest;
use Illuminate\Http\Request;
use App\Alumni;
use Carbon\Carbon;
use App\User;
use Auth;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }
    public function registrasi()
    {
        return view('auth.registrasi');
    }
    public function prosesRegistrasi(RegistrasiRequest $request)
    {
        //upload gambar
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
