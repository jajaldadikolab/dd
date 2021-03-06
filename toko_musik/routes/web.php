<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
// Route::group(
//     ['namescape'=> 'Admin','prefix'  =>'admin'],
//     function(){
//         Route::get('dashboard','DashboardController@index');
//         Route::resource('categories','CategoryController');
//     }
// );
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // categories
    Route::resource('categories', CategoryController::class)->except('show');
   
    // products
    Route::resource('products', ProductController::class);

    // product images
    Route::get('products/{productID}/images', [ProductController::class, 'images']);
    Route::get('products/{productID}/add-image', [ProductController::class, 'add_image']);
    Route::post('products/images/{productID}', [ProductController::class, 'upload_image']);
    Route::delete('products/images/{imageID}', [ProductController::class, 'remove_image']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
