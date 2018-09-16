<?php

$nameSpace = 'Scform\Http\Controllers';
Route::group([
    'namespace' => $nameSpace,
    'prefix' => 'audit'
], function(){
    Route::get('/', 'ScformController@index');
    Route::get('test', function(){
        return "test";
    });
});