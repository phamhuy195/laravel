<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

//    $posts = DB::table('categories')
//        ->where('category_id', 5)
//        ->orderBy('created_at', 'desc')
//        ->limit(100)
//        ->get();

//        $posts = DB::table('posts')
//        ->whereRaw(' `category_id` = 5 order by `created_at` desc limit 100')
//            ->toRawSql();

//        dd($posts);

    return view('welcome');
});

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);



//Route::prefix('categories')
//    ->name('categories.')
//    ->group(function () {
//        Route::get('/', [CategoryController::class, 'index'])->name('index');
//        Route::post('/create', [CategoryController::class, 'create'])->name('create');
//        Route::post('/', [CategoryController::class, 'store'])->name('store');
//        Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
//        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
//        Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
//        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
//    });
