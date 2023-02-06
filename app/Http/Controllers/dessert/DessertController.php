<?php

namespace App\Http\Controllers\dessert;

use App\Http\Controllers\Controller;
use App\Models\Dessert;
use App\Models\FoodCategory;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DessertController extends Controller
{
    public function index(){
        $desserts = Dessert::all();

        return view('admin.dessert.index', compact('desserts'));
    }

    public function create(){
    }

    public function store(Request $request){
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Dessert::create($data);
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $product = Dessert::find($id);
        $product->update($data);
        return redirect()->route('admin.dessert');
    }

    public function destroy($id)
    {
        Dessert::destroy($id);
        return redirect()->route('admin.dessert');
    }
}
