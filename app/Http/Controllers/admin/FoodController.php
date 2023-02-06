<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index() {
        $categories = FoodCategory::all();
        $products = Food::all();
        return view('admin.menu.food.index', compact('categories', 'products'));
    }

    public function store(Request $request){
        $data = $request->all();
        Food::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Food::destroy($id);
        return redirect()->route('admin.menu.food');
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $product = Food::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function destroyproduct($id)
    {
        Food::destroy($id);
        return redirect()->route('admin.menu.food');
    }
}
