<?php

use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\ProfileController;
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
Route::get('/','App\Http\Controllers\PagesController@home');
// Route::get('/','App\Http\Controllers\PagesController@home');
Route::get('/blogs','App\Http\Controllers\PagesController@index');
Route::get('/blogsCreate','App\Http\Controllers\PagesController@blogsCreate');
// Route::get('/blogs/blogsCreate','App\Http\Controllers\PagesController@blogsCreate');
Route::post('/blogs','App\Http\Controllers\PagesController@blogCreate');
// Route::post('/blogs','App\Http\Controllers\PagesController@blog');
// Route::post('/blogs','App\Http\Controllers\PagesController@blogs');
// Route::get('/blogs/{blogData}','App\Http\Controllers\PagesController@show');
Route::post('/blogs', [Pagescontroller::class, 'blogupload']);
Route::GET('/blogs/{blogs}','App\Http\Controllers\PagesController@show');
Route::Get('/blogs/{blogs}/edit','App\Http\Controllers\PagesController@edit');
Route::patch('/blogs/{blogs}','App\Http\Controllers\PagesController@update');
Route::delete('/blogs/{blogs}','App\Http\Controllers\PagesController@delete');
Route::get('/About','App\Http\Controllers\PagesController@About');
Route::get('/contact','App\Http\Controllers\PagesController@contact');
Route::get('/service','App\Http\Controllers\PagesController@Service');




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
