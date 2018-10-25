<?php
/**
 * Created by PhpStorm.
 * User: bytelab
 * Date: 10/24/18
 * Time: 3:19 PM
 */
Route::get('/', function () {
    return view('UserModule::index');
});

Route::get('/home', function () {
    return view('UserModule::index');
});

