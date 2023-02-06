<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodCategoryController extends Controller
{
    public function index()
    {
        $categories = FoodCategory::all();
        return $categories->isEmpty() ?
            view('admin.menu.food-categories.index', compact('categories')) :
            redirect()->route('admin.menu.food-categories.show', $categories->toArray()[0]['id']);
    }

    public function show($id)
    {
        $selected = FoodCategory::find($id);
        $categories = FoodCategory::all();
        return view('admin.menu.food-categories.show', compact('categories', 'selected'));
    }

    public function create()
    {
        $categories = FoodCategory::all();
        return view('admin.menu.food-categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $insertion = FoodCategory::create($request->all());

        return redirect()->route('admin.menu.food-categories');
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $product = FoodCategory::find($id);
        $product->update($data);
        return redirect()->route('admin.menu.food-categories');
    }

    public function productedit(Request $request, $id)
    {

        $data = $request->all();
        if (array_key_exists('image', $data)) $data['image'] = Storage::put('/images', $request['image']);
        $product = Food::find($id);
        $product->update($data);
        return redirect()->route('admin.menu.food-categories');
    }

    public function destroy($id)
    {
        FoodCategory::destroy($id);
        return redirect()->route('admin.menu.food-categories');
    }

    public function destroyproduct($id)
    {
        FoodCategory::destroy($id);
        return redirect()->route('admin.menu.food-categories');
    }

    public function search(Request $request)
    {
        $output = '';
        $categories = FoodCategory::where('title', 'Like', '%' . $request['search'] . '%')->get();

        foreach ($categories as $category) {
            $output .= view('admin.menu.food-categories.Search.categoriesSearch', compact('category'));
        }

        return $output;
    }

    public function add(Request $request)
    {
        $categories = FoodCategory::where('title', $request['search'])->get();
        return $categories->isEmpty() ? 'Not Found' : $categories;
    }
}
