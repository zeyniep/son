<?php

use Illuminate\Support\Facades\Route;
use App\Resource\View;
use App\Http\Controllers\UseConroller;


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


Route::get('/', function()
{
  return view('layouts.anasayfa');
})->name('cıkıs');


Route::get('/ogrencianasayfa', function()
{
  return view('layouts.ogrencianasayfa');
})->name('ogrencianasayfa');

Route::get('/basvurularim', function()
{
  return view('layouts.basvurularim');
})->name('basvurularim');

Route::get('/basvuruyap', function()
{
  return view('layouts.yenibasvurularim');
})->name('yenibasvurularim');

Route::get('/admingiris', function()
{
  return view('layouts.admingiris');
})->name('admin');

Route::get('/admin', function()
{
  return view('layouts.admin');
})->name('admin');

Route::get('/kisiselbilgiler', function()
{
  return view('layouts.kisiselbilgiler');
});

Route::get('/sifremiunuttum', function()
{
  return view('layouts.sifremiunuttum');
});

Route::get('/kisiselbilgiler', function()
{
  return view('layouts.kisiselbilgiler');
});

Route::get('/adminbasvurular', function()
{
  return view('layouts.adminbasvurular');
});

Route::get('/basvurucap', function()
{
  return view('layouts.basvurucap');
});

Route::get('/basvuruytg', function()
{
  return view('layouts.basvuruytg');
});

Route::get('/basvurudgs', function()
{
  return view('layouts.basvurudgs');
});

Route::get('/basvuruintibak', function()
{
  return view('layouts.basvuruintibak');
});

Route::get('/basvuruyazokulu', function()
{
  return view('layouts.basvuruyazokulu');
});

Route::view('kayitol','layouts.kayitol')->name('kayitol');
Route::post('kayitol',[UseConroller::class,'alma']);
Route::post('ogrencigiris',[UseConroller::class,'kontrol'])->name('kayitkontrol');
Route::get('/ogrencigiris',[UseConroller::class,'ogrencigiris']);
Route::get('/kisiselbilgiler',[UseConroller::class, 'bilgiler']);
Route::post('basvurucap',[UseConroller::class,'basvurucap'])->name('capkontrol');
Route::post('basvuruyty',[UseConroller::class,'basvuruyty'])->name('ytykontrol');
Route::post('basvurudgs',[UseConroller::class,'basvurudgs'])->name('dgskontrol');
Route::post('basvuruintibak',[UseConroller::class,'basvuruint'])->name('inibakkontrol');
Route::post('basvuruyazokulu',[UseConroller::class,'basvuruyazok'])->name('yazokulukontrol');
Route::get('/basvurucap',[UseConroller::class, 'cap']);
Route::get('/basvuruytg',[UseConroller::class, 'yty']);
Route::get('/basvurudgs',[UseConroller::class, 'dgs']);
Route::get('/basvuruintibak',[UseConroller::class, 'intibak']);
Route::get('/basvuruyazokulu',[UseConroller::class, 'yazokulu']);
Route::get('adminbasvurular',[UseConroller::class,'goster']);
