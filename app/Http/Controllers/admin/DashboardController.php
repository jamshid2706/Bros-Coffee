<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $sliderItems = Header::all();
        return view('admin.dashboard.index', compact('sliderItems'));
    }
}
