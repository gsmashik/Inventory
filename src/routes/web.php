<?php

use Illuminate\Support\Facades\Route;
Route::get('test', 'olee\inventory\controllers\ItemsController@index');
Route::resource('items', olee\inventory\controllers\ItemsController::class);


