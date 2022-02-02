<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Fshangala\Invetory\Http\Controllers'],function($router){
    $router->group(['prefix'=>'/inventory'],function($router){
        $router->group(['prefix'=>'/products'],function($router){
            $router->post('/create','ProductController@create');
        });
    });
});