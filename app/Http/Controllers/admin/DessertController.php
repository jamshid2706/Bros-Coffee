<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dessert;
use App\Models\DessertCategory;
use App\Models\Header;
use http\Client\Request;
use Illuminate\Support\Facades\Storage;

class DessertController extends Controller
{
    public function index() {
        $categories = DessertCategory::all();
        $products = Dessert::all();
        return view('admin.dessert.index', compact('categories', 'products'));
    }

    public function store(Request $request){
        $data = $request->all();
        dd($data);
        $data['image'] = Dessert::put('/image/', $data['image']);
        Dessert::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Dessert::destroy($id);
        return redirect()->route('admin.dessert');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->all();
        $product = Dessert::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function destroyproduct($id)
    {
        Dessert::destroy($id);
        return redirect()->route('admin.dessert');
    }
}
