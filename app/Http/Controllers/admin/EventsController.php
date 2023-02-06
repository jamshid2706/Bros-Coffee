<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function index() {
        $categories = Events::all();
        $products = Events::all();
        return view('admin.events.index', compact('categories', 'products'));
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Events::put('/image/', $data['image']);
        Events::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Events::destroy($id);
        return redirect()->route('admin.events');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->all();
        $product = Events::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function destroyproduct($id)
    {
        Events::destroy($id);
        return redirect()->route('admin.events');
    }
}
