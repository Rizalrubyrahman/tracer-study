<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index',compact('events'));
    }

    public function tambah()
    {
        return view('admin.event.tambah');
    }

    public function store(EventRequest $request)
    {
        Event::create($request->all());
        alert()->success('Berhasil','Event telah ditambahkan');
        return redirect('/admin/event');
    }

    public function edit(Event $event)
    {
        return view('admin.event.edit',compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->all());
        alert()->success('Berhasil','Event telah di ubah');
        return redirect('/admin/event');
    }

    public function delete(Event $event)
    {
        $event->delete();
        alert()->success('Berhasil','Event telah di hapus');
        return redirect()->back();
    }
}
