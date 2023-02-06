<?php

namespace App\Http\Controllers\events;

use App\Http\Controllers\Controller;
use App\Models\Dessert;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function index(){
        $events = Events::all();

        return view('admin.events.index', compact('events'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Events::create($data);
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $product = Events::find($id);
        $product->update($data);
        return redirect()->route('admin.events');
    }

    public function destroy($id)
    {
        Events::destroy($id);
        return redirect()->route('admin.events');
    }
}
