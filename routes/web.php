<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
});

Route::get('/kbkoding', function (){
    return view('kbkoding');
});

Route::get('/kbka', function () {
    return view('kbka');
});

Route::get('/kbkeamanan', function (){
    return view('kbkeamanan');
});

Route::get('/kasd', function (){
    return view('materi.kasd');
});

Route::get('/kasdsoal', function (){
    return view('soal.kasdsoal');
});