<?php

use Illuminate\Support\Facades\Route;
use Simple\Calculator\Calculator;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/cal/', function() {
    $calculator = new Calculator();
    return $calculator->Calculator();
});
