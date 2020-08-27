<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumni;
use App\Pertanyaan;
use App\Event;
use App\Jawaban;

class DashboardController extends Controller
{
    public function index()
    {   
        $alumni = Alumni::all()->count();
        $pertanyaan = Pertanyaan::all()->count();
        $event = Event::all()->count();
        $kuliah = Jawaban::where('jawaban1','A')->count();
        $bekerja = Jawaban::where('jawaban1','B')->count();
        $menganggur = Jawaban::where('jawaban1','C')->count();
        $dll = Jawaban::where('jawaban1','D')->count(); 
        return view('admin.dashboard.index',compact('alumni','pertanyaan','event','kuliah','bekerja','menganggur','dll'));
    }
}
