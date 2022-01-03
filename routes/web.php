<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OperationController;
Use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
Use App\Http\Controllers\PesananController;
use App\Models\Menu;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/clear-view', function() {
    $exitCode = Artisan::call('view:cache');
    return 'DONE Clear View Cache'; //Return anything
});
Route::get('home', function () {
    return redirect()->to('/');
});
Route::get('/', [ProdukController::class, 'index']);


Route::post('/products/{id}', [ProdukController::class, 'create']);

Route::get('/products/{id}', [ProdukController::class, 'show']);

Route::post('/keranjang/{id}', [KeranjangController::class, 'store']);
Route::get('/keranjang', [KeranjangController::class, 'index']);

Route::post('/pesanan/{id}', [PesananController::class, 'show']);
Route::get('/pesanan/{id}', [PesananController::class, 'show']);



Auth::routes();
Route::get('register/success', [DashboardController::class,'register'])->name('register.success');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
});
Route::group(['middleware' => ['role:user']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dosen'])->name('dashboard.user');
});

Route::resource('database', DatabaseController::class);
Route::resource('menu', MenuController::class);
Route::resource('crud', CrudController::class);

Route::group(['as'=>'aldev'],function(){
    $menus = Menu::where('url','!=',"menu")->where('url','!=',"database")->where('url','!=',"crud")->get();
    foreach ($menus as $menu) {
        Route::get("$menu->url", [OperationController::class, 'index'])->name("$menu->url.index");
        Route::get("$menu->url/create", [OperationController::class, 'create'])->name("$menu->url.create");
        Route::post("$menu->url", [OperationController::class, 'store'])->name("$menu->url.store");
        Route::get("$menu->url/{id}", [OperationController::class, 'show'])->name("$menu->url.show");
        Route::get("$menu->url/{id}/edit", [OperationController::class, 'edit'])->name("$menu->url.edit");
        Route::put("$menu->url/{id}", [OperationController::class, 'update'])->name("$menu->url.update");
        Route::delete("$menu->url/{id}", [OperationController::class, 'destroy'])->name("$menu->url.destroy");
    }
});

