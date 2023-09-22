<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('antrian');
});
Route::get('/antri_cs/{id}/{id2}/{id3}','Antrian@antri_cs');
Route::get('/antri_teller1/{id}/{id2}/{id3}','Antrian@antri_teller1');
Route::get('/antri_teller2/{id}/{id2}/{id3}','Antrian@antri_teller2');

