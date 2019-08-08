<?php
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

Route::get('/', function () {
    return view('pages.awal');
});
// Route::get('/login', function () {
//     return view('pages.login');
// });
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk','ProdukController@index');
Route::get('/produk/add','ProdukController@add');
Route::post('/produk/list','ProdukController@list');
Route::get('/produk/edit/{kd}','ProdukController@edit');
Route::post('/produk/update','ProdukController@update');
Route::get('/produk/delete/{kd}','ProdukController@delete');


