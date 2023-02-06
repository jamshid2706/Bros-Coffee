<?php

namespace App\Http\Controllers\admin;

use App\Exceptions\Handler;
use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Models\Media;
use App\Models\MediaRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index(){
        $headers = Header::all();

        return view('admin.header.index', compact('headers'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Header::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Header::destroy($id);
        return redirect()->route('admin.header');
    }
}
