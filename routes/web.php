<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriminalController;
use App\Http\Controllers\TestController;
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

Route::get('/test', function () {
    return view('/Index/register');
});

// The route we have created to show all blog posts.

Route::get('/', [TestController::class, 'index']);
Route::get('/list', [TestController::class, 'index']);
Route::get('/create',[TestController::class, 'create']);
Route::post('/add', [TestController::class, 'add'])->name('add.add');
Route::post('/delete', [TestController::class, 'delete'])->name('delete.delete');
Route::post('/edit', [TestController::class, 'edit'])->name('posts.edit');
// Route::post('/posts', [TestController::class, 'update'])->name('posts.update');
// Route::get('/create',[UserController::class, 'create']);
// // Route::get('/register', [UserController::class, 'store'])->name('posts.store');   
// Route::get('/list_users', [UserController::class, 'index']);
// Route::post('/create_user',[UserController::class, 'store'])->name('posts.store'); 
// Route::post('/edit', [UserController::class, 'edit'])->name('posts.edit');
// Route::post('/posts', [UserController::class, 'update'])->name('posts.update');
// Route::post('/delete', [UserController::class, 'destroy'])->name('delete.delete');



#login
// Route::get('/', [LoginController::class, 'index']);
// Route::post('/login', [LoginController::class, 'login']);
// Route::get('/home_page', [HomeController::class, 'index']);
// Route::get('/logout', [HomeController::class, 'logout']);

// #criminal
// Route::get('/criminal_list', [CriminalController::class, 'listCriminal']);
// Route::get('/add_criminal', [CriminalController::class, 'addCriminal']);
// Route::get('/update_criminal', [CriminalController::class, 'editCriminal']);
// Route::get('/criminal_detail', [CriminalController::class, 'detailCriminal']);


