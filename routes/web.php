<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('test', 'TestController');

/*
use App\Loai;
Route::get('/danhsachloai', function() {
    // Eloquent Model de lay du lieu
    //$ds_loai = Loai::all(); // SELECT * FROM cusc_loai
    
    // Query Builder
    $ds_loai = DB::table('cusc_loai')->get();

    $json    = json_encode($ds_loai);
    return $json;
});
*/

// tencontroller@action
// route Loai
Route::get('/admin/danhsachloai', 'LoaiController@index')->name('danhsachloai.index');
Route::get('/admin/danhsachloai/{id}', 'LoaiController@edit')->name('danhsachloai.edit');
Route::put('/admin/danhsachloai/{id}', 'LoaiController@update')->name('danhsachloai.update');
Route::delete('/admin/danhsachloai/{id}', 'LoaiController@destroy')->name('danhsachloai.destroy');

// route Sản phẩm
Route::resource('/admin/danhsachsanpham', 'SanPhamController');