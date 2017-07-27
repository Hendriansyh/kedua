<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function ()
{
	return '<h1> Hello</h1>'
	.'Selamat datang diwebapp saya</br>'
	.'Laravel, emang keren.';
});

Route::get('/latihan', function ()
{
	return view('about');
});

Route::get('/latihan/1', function ()
{
	return view('1');
});


Route::get('/latihan/2', function ()
{
	return view('2');
});


Route::get('/latihan/3', function ()
{
	return view('3');
});

Route::get('latihan/{nama}/{sekolah}/{umur}', function($nama,$sekolah,$umur)
{
	return 'Nama Saya: '.$nama.'</br>
	Saya Sekolah Di :'.$sekolah.'</br>
	Umur saya sekitar : '.$umur;
});

Route::get('/about/hendri', function()
{
	$a=' Asep';
	return "Ini Halaman About" . $a;
});