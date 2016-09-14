<?php

Route::resource('api/v1/camera/', 'Ucast\Api\Controllers\RestController');

Route::get('foo/foo', 'Ucast\Api\Controllers\Camera@foo');
Route::resource('foo', 'Ucast\Api\Controllers\Camera');

