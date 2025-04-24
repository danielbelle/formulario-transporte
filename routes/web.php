<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('test');
});
Route::get('/test-email', function () {
    Mail::send(new \App\Mail\TestMail());
});
