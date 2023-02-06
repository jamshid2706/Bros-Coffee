<?php

namespace App\Http\Controllers\menu;

use App\Exceptions\Handler;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Media;
use App\Models\MediaRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();

        return view('admin.menu.index', compact('menu'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Menu::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect()->route('admin.menu');
    }
}
