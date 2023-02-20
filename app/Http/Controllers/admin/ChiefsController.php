<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Chiefs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChiefsController extends Controller
{
    public function index()
    {
        $categories = Chiefs::all();
        $products = Chiefs::all();
        $chiefss = Chiefs::all();
        return view('admin.chiefs.index', compact('categories', 'products', 'chiefss'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['image'] = Storage::put('/image/', $data['image']);
        Chiefs::create($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Chiefs::destroy($id);
        return redirect()->route('admin.chiefs');
    }

    public function edit(Request $request, $id)
    {

        $data = $request->all();
        $product = Chiefs::find($id);
        $product->update($data);
        return redirect()->back();
    }

    public function destroyproduct($id)
    {
        Chiefs::destroy($id);
        return redirect()->route('admin.chiefs');
    }
}
