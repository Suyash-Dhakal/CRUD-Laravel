<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){
    Route::get('/','show')->name('home');

    Route::get('/updatepage/{id}','updatePage')->name('update.page');
    Route::post('/update/{id}','updateUser')->name('update.user');

Route::get('/user/{id}','singleUser')->name('view.user');

Route::post('/add','addUser')->name('addUser');

Route::get('/delete/{id}','deleteUser')->name('remove.user');

});

Route::get('/newuser',function(){
    return view('adduser');
});




 