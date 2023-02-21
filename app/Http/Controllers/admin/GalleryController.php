<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $gallerys = Gallery::all();

        return view('admin.gallery.index', compact('gallerys'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Gallery::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->route('admin.gallery');
    }
}
