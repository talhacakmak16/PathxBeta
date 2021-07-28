<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','front\IndexController@index')->name('home');


Route::get('/dogrulama','MainController@auth')->name('auth');
Route::post('/kaydet','MainController@save')->name('save');
Route::post('/check','MainController@check')->name('check');
Route::get('/cikis','MainController@logout')->name('logout');
Route::get('/kategori/{selflink}','front\cat\IndexController@index')->name('cat');
Route::get('/arama','front\search\IndexController@index')->name('search');
Route::get('/hakkimizda','front\IndexController@about')->name('about');
Route::get('/iletisim','front\IndexController@contact')->name('contact');


Auth::routes();

Route::get('/home','front\IndexController@index')->name('home');

Route::group(['namespace'=>'admin','middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function ()
{
    Route::get('/','IndexController@index')->name('index');

    Route::group(['namespace'=>'brand','prefix'=>'brand','as'=>'brand.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/ekle','IndexController@create')->name('create');
        Route::post('/ekle','IndexController@store')->name('create.post');
        Route::get('/düzenle/{id}','IndexController@edit')->name('edit');
        Route::post('/düzenle/{id}','IndexController@update')->name('edit.post');
        Route::get('/sil/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'team','prefix'=>'team','as'=>'team.'],function ()
    {
        Route::get('/','TeamController@index')->name('index');
        Route::get('/düzenle/{id}','TeamController@edit')->name('edit');
        Route::post('/düzenle/{id}','TeamController@update')->name('edit.post');
        Route::get('/ekle','TeamController@create')->name('create');
        Route::post('/ekle','TeamController@store')->name('create.post');
        Route::get('/sil/{id}','TeamController@delete')->name('delete');
    });
    Route::group(['namespace'=>'jersey','prefix'=>'jersey','as'=>'jersey.'],function ()
    {
        Route::get('/','JerseyController@index')->name('index');
        Route::get('/ekle','JerseyController@create')->name('create');
        Route::post('/ekle','JerseyController@store')->name('create.post');
        Route::get('/düzenle/{id}','JerseyController@edit')->name('edit');
        Route::post('/düzenle/{id}','JerseyController@update')->name('edit.post');
        Route::get('/sil/{id}','JerseyController@delete')->name('delete');
    });
    Route::group(['namespace'=>'special','prefix'=>'special','as'=>'special.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/ekle','IndexController@create')->name('create');
        Route::post('/ekle','IndexController@store')->name('create.post');
        Route::get('/düzenle/{id}','IndexController@edit')->name('edit');
        Route::post('/düzenle/{id}','IndexController@update')->name('edit.post');
        Route::get('/sil/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'category','prefix'=>'category','as'=>'category.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/ekle','IndexController@create')->name('create');
        Route::post('/ekle','IndexController@store')->name('create.post');
        Route::get('/düzenle/{id}','IndexController@edit')->name('edit');
        Route::post('/düzenle/{id}','IndexController@update')->name('edit.post');
        Route::get('/sil/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/ekle','IndexController@create')->name('create');
        Route::post('/ekle','IndexController@store')->name('create.post');
        Route::get('/düzenle/{id}','IndexController@edit')->name('edit');
        Route::post('/düzenle/{id}','IndexController@update')->name('edit.post');
        Route::get('/sil/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'order','prefix'=>'order','as'=>'order.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/ekle','IndexController@create')->name('create');
        Route::post('/ekle','IndexController@store')->name('create.post');
        Route::get('/detay/{id}','IndexController@detail')->name('detail');
        Route::get('/sil/{id}','IndexController@delete')->name('delete');
    });


});


Route::get('/ürün/detay/{selflink}','front\jersey\IndexController@index')->name('detay');
Route::get('/shop','front\shop\IndexController@index')->name('shop');
Route::get('/sepet/ekle/{id}','front\BasketController@index')->name('sepet');
Route::get('/sepet','front\BasketController@edit')->name('checkout');
Route::get('/sepet/sil/{id}','front\BasketController@remove')->name('basket.remove');
Route::get('/sepet/tamamla','front\BasketController@complete')->name('basket.complete');
Route::post('/sepet/tamamla','front\BasketController@store')->name('basket.store');
Route::get('/sepet/temizle','front\BasketController@flush')->name('basket.flush');
