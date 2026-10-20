<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentControler;

Route::get('/', function () {
    return redirect()->route('students.index');
});

Route::resource('students', StudentControler::class);