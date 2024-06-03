<?php

use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: fn() => view(view: 'home'));
Route::get(uri: '/about', action: fn() => view(view: 'about'));
Route::get(uri: '/contact', action: fn() => view(view: 'contact'));
Route::get(uri: '/gallery', action: fn() => view(view: 'gallery'));

Route::get(uri: 'users',action: function () {
        return [
          ['id' => 1, 'name' => 'John', 'email' => 'jhon@gmail.com'],
          ['id' => 1, 'name' => 'broe', 'email' => 'broe@gmail.com']
        ];
    },
);
