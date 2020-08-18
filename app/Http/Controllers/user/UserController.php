<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pertanyaan;
use App\Jawaban;
use App\Http\Requests\KuesionerRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Event;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function event()
    {
        $events = Event::all();
        return view('user.event.index',compact('events'));
    }

    public function kuesioner()
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
            alert()->success('Terima kasih','Kuesioner telah di kirim');
            return redirect('/');
        
    }

    public function alumni()
    {
        $kuliah = Jawaban::where('jawaban1','A')->count();
        $bekerja = Jawaban::where('jawaban1','B')->count();
        $menganggur = Jawaban::where('jawaban1','C')->count();
        $dll = Jawaban::where('jawaban1','D')->count();

        return view('user.alumni.index',compact('kuliah','bekerja','menganggur','dll'));
    }
}
