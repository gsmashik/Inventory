<?php

use Illuminate\Support\Facades\Route;
Route::get('test', 'olee\inventory\controllers\ItemsController@index');

Route::group(['middleware' => ['web']], function () {
    Route::resource('items', olee\inventory\controllers\ItemsController::class);
    Route::resource('salesOreder', olee\inventory\controllers\SalesOrderController::class);

});




