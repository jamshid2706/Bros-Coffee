<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();

        return view('admin.about.index', compact('about'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        About::create($data);
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $product = About::find($id);
        $product->update($data);
        return redirect()->route('admin.about');
    }

    public function destroy($id)
    {
        About::destroy($id);
        return redirect()->route('admin.about');
    }
}
