<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\pertanyaan;
use App\Jawaban;
use App\Http\Requests\KuesionerRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class KuesionerController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
     return view('user.kuesioner.index',compact('pertanyaans'));
    }
    public function simpanKuesioner(KuesionerRequest $request)
    {
        Jawaban::create([
            'user_id' => auth()->user()->id,
            'jawaban1' => $request->jawaban1,
            'jawaban2' => $request->jawaban2,
            'jawaban3' => $request->jawaban3,
            'jawaban4' => $request->jawaban4,
            'jawaban5' => $request->jawaban5,
            'jawaban6' => $request->jawaban6,
            'jawaban7' => $request->jawaban7,
            'jawaban8' => $request->jawaban8,
            'jawaban9' => $request->jawaban9,
            'jawaban10' => $request->jawaban10,
        ]);
        session()->flash('error','Username atau password yang anda masukan salah');
        alert()->success('Terima kasih','Kuesioner telah di kirim');
        return redirect('/');
    }

}
