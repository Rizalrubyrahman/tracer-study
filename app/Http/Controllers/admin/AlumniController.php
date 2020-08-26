<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Alumni;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\RegistrasiRequest;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();
        return view('admin.alumni.index',compact('alumnis'));
    }

    public function delete(Alumni $alumni)
    {
        $alumni->delete();
        alert()->success('Berhasil','Data alumni telah di hapus');
        return redirect()->back();
    }

    public function profile(Alumni $alumni)
    {
        return view('admin.alumni.profile',compact('alumni'));
    }
    
    public function update(Alumni $alumni, Request $request)
    {
        $alumni->update($request->all());
        if($request->hasFile('gambar')){
            $fileName = $request->file('gambar')->getClientOriginalName();
            $tempatFile = public_path('/images');
            $request->file('gambar')->move($tempatFile,$fileName);
            $alumni->gambar = $fileName;
            $alumni->save();
            
        }
        if($alumni)
        {
            alert()->success('Berhasil','Data alumni telah di ubah');
        return redirect('/admin/alumni');
        }
    }
}
