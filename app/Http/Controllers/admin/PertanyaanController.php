<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PertanyaanRequest;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view('admin.pertanyaan.index',compact('pertanyaans'));
    }

    public function tambah()
    {
        return view('admin.pertanyaan.tambah');
    }
    
    public function store(PertanyaanRequest $request)
    {
        Pertanyaan::create($request->all());
        alert()->success('Berhasil','Pertanyaan telah di tambahkan');
        return redirect('/admin/pertanyaan');
    }

    public function edit(Pertanyaan $pertanyaan)
    {
        return view('admin.pertanyaan.edit',compact('pertanyaan'));
    }

    public function update(Pertanyaan $pertanyaan,PertanyaanRequest $request)
    {
        $pertanyaan->update($request->all());
        alert()->success('Berhasil','Pertanyaan telah di ubah');
        return redirect('/admin/pertanyaan');
    }

    public function delete(Pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        alert()->success('Berhasil','Pertanyaan telah di hapus');
        return redirect()->back();
    }
}
