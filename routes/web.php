<?php

use App\Http\Controllers\front\cat\IndexController;
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
Route::get('/home','front\IndexController@index')->name('home');

Route::get('/category/{selflink}', [IndexController::class, 'index'])->name('cat');
Route::get('/search','front\search\IndexController@index')->name('search');
Route::get('/about-us','front\IndexController@about')->name('about');
Route::get('/contact','front\IndexController@contact')->name('contact');



Auth::routes();

Route::group(['namespace'=>'admin','middleware'=>['auth','AdminCtrl'],'prefix'=>'admin','as'=>'admin.'],function ()
{
    Route::get('/','IndexController@index')->name('index');

    Route::group(['namespace'=>'brand','prefix'=>'brand','as'=>'brand.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/edit/{id}','IndexController@edit')->name('edit');
        Route::post('/edit/{id}','IndexController@update')->name('edit.post');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'team','prefix'=>'team','as'=>'team.'],function ()
    {
        Route::get('/','TeamController@index')->name('index');
        Route::get('/edit/{id}','TeamController@edit')->name('edit');
        Route::post('/edit/{id}','TeamController@update')->name('edit.post');
        Route::get('/add','TeamController@create')->name('create');
        Route::post('/add','TeamController@store')->name('create.post');
        Route::get('/delete/{id}','TeamController@delete')->name('delete');
    });
    Route::group(['namespace'=>'jersey','prefix'=>'jersey','as'=>'jersey.'],function ()
    {
        Route::get('/','JerseyController@index')->name('index');
        Route::get('/add','JerseyController@create')->name('create');
        Route::post('/add','JerseyController@store')->name('create.post');
        Route::get('/edit/{id}','JerseyController@edit')->name('edit');
        Route::post('/edit/{id}','JerseyController@update')->name('edit.post');
        Route::get('/delete/{id}','JerseyController@delete')->name('delete');
    });
    Route::group(['namespace'=>'special','prefix'=>'special','as'=>'special.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/edit/{id}','IndexController@edit')->name('edit');
        Route::post('/edit/{id}','IndexController@update')->name('edit.post');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'category','prefix'=>'category','as'=>'category.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/edit/{id}','IndexController@edit')->name('edit');
        Route::post('/edit/{id}','IndexController@update')->name('edit.post');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/edit/{id}','IndexController@edit')->name('edit');
        Route::post('/edit/{id}','IndexController@update')->name('edit.post');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'order','prefix'=>'order','as'=>'order.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/detail/{id}','IndexController@detail')->name('detail');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });
    Route::group(['namespace'=>'users','prefix'=>'users','as'=>'users.'],function ()
    {
        Route::get('/','IndexController@index')->name('index');
        Route::get('/add','IndexController@create')->name('create');
        Route::post('/add','IndexController@store')->name('create.post');
        Route::get('/edit/{id}','IndexController@edit')->name('edit');
        Route::post('/edit/{id}','IndexController@update')->name('edit.post');
        Route::get('/detail/{id}','IndexController@detail')->name('detail');
        Route::get('/delete/{id}','IndexController@delete')->name('delete');
    });


});
Route::group(['prefix'=>'sepet','namespace'=>'front','as'=>'sepet.'],function ()
{
    Route::get('/add/{id}','BasketController@index')->name('sepet');
    Route::get('/','BasketController@edit')->name('checkout');
    Route::get('/delete/{id}','BasketController@remove')->name('remove');
    Route::get('/complete','BasketController@complete')->name('complete')->middleware(['auth','AdminCtrl']);
    Route::post('/complete','BasketController@store')->name('store')->middleware(['auth','AdminCtrl']);
    Route::get('/clear','BasketController@flush')->name('flush');
});

Route::get('/product/detail/{selflink}','front\jersey\IndexController@index')->name('detay');
Route::get('/shop','front\shop\IndexController@index')->name('shop');
Route::get('/proflie/{name}','front\IndexController@profile')->name('profile');

Route::get('/bootstrap',function ()
{
   return view('layouts.bootstrap');
});




