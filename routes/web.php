<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EventsController;
use App\Http\Controllers\admin\FoodCategoryController;
use App\Http\Controllers\admin\FoodController;
use App\Http\Controllers\admin\HeaderController;
use App\Http\Controllers\dessert\DessertController;
use App\Http\Controllers\menu\MenuController;
use App\Models\About;
use App\Models\Dessert;
use App\Models\Events;
use App\Models\FoodCategory;
use App\Models\Header;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $sliderItems = Header::all();
    $toggle = true;
    $categories = FoodCategory::all();
    $desserts = Dessert::all();
    $events = Events::all();
    $about = About::all();
    return view('front.index', compact('sliderItems', 'toggle', 'categories', 'desserts'));
});

Route::group(['namespace'=>'admin', 'prefix'=>'admin','middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::group(['prefix'=>'header'], function (){
       Route::get('/', [HeaderController::class, 'index'])->name('admin.header');
       Route::post('/store', [HeaderController::class, 'store'])->name('admin.header.store');
        Route::delete('/{id}', [HeaderController::class, 'destroy'])->name('admin.header.delete');
    });
    Route::group(['prefix'=>'menu'], function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu');
        Route::get('/create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::get('/edit', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::group(['prefix'=>'food'], function () {
            Route::get('/', [FoodController::class , 'index'])->name('admin.menu.food');
            Route::post('/store', [FoodController::class, 'store'])->name('admin.menu.food.store');
            Route::post('/{id}/edit', [FoodController::class, 'edit'])->name('admin.menu.food.edit');
            Route::delete('/{id}', [FoodController::class, 'destroy'])->name('admin.menu.food.delete');
            Route::delete('/{id}', [FoodController::class, 'destroyproduct'])->name('admin.menu.food.productdelete');
        });
        Route::group(['prefix'=>'food-categories'], function () {
            Route::get('/', [FoodCategoryController::class, 'index'])->name('admin.menu.food-categories');
            Route::get('/add', [FoodCategoryController::class, 'add'])->name('admin.menu.food-categories.add');
            Route::get('/search', [FoodCategoryController::class, 'search'])->name('admin.menu.food-categories.search');
            Route::get('/{id}', [FoodCategoryController::class, 'show'])->name('admin.menu.food-categories.show');
            Route::post('/store', [FoodCategoryController::class, 'store'])->name('admin.menu.food-categories.store');
            Route::post('/{id}/edit', [FoodCategoryController::class, 'edit'])->name('admin.menu.food-categories.edit');
            Route::post('/{id}/productedit', [FoodCategoryController::class, 'productedit'])->name('admin.menu.food-categories.product.edit');
            Route::delete('/{id}', [FoodCategoryController::class, 'destroy'])->name('admin.menu.food-categories.delete');
            Route::delete('/{id}', [FoodCategoryController::class, 'destroyproduct'])->name('admin.menu.food-categories.productdelete');
        });
    });
    Route::group(['prefix'=>'dessert'], function () {
        Route::group(['prefix'=>'dessert-1'], function () {
            Route::get('/', [DessertController::class , 'index'])->name('admin.dessert');
            Route::post('/store', [DessertController::class, 'store'])->name('admin.dessert.store');
            Route::post('/{id}/edit', [DessertController::class, 'edit'])->name('admin.dessert.edit');
            Route::delete('/{id}', [DessertController::class, 'destroy'])->name('admin.dessert.delete');
        });
    });
    Route::group(['prefix'=>'events'], function () {
        Route::group(['prefix'=>'events-slider'], function () {
            Route::get('/', [EventsController::class , 'index'])->name('admin.events');
            Route::post('/store', [EventsController::class, 'store'])->name('admin.events.store');
            Route::post('/{id}/edit', [EventsController::class, 'edit'])->name('admin.events.edit');
            Route::delete('/{id}', [EventsController::class, 'destroy'])->name('admin.events.delete');
        });
    });
    Route::group(['prefix'=>'about'], function () {
        Route::group(['prefix'=>'aboutus'], function () {
            Route::get('/', [AboutController::class , 'index'])->name('admin.about');
            Route::post('/store', [AboutController::class, 'store'])->name('admin.about.store');
            Route::post('/{id}/edit', [AboutController::class, 'edit'])->name('admin.about.edit');
            Route::delete('/{id}', [AboutController::class, 'destroy'])->name('admin.about.delete');
        });
    });
});

Auth::routes();

