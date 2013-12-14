<?php

use App\Route;

Route::group('/v1', function () {
    Route::get('/contents', 'App\Controllers\SiteContents:index');
    Route::get('/users', 'App\Controllers\Users:index');
});