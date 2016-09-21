<?php

use Ucast\Api\Models\Camera as CameraModel;
use Auth;

Route::resource('api/v1/camera/', 'Ucast\Api\Controllers\RestController');

Route::get('foo/foo', 'Ucast\Api\Controllers\Camera@foo');
Route::resource('foo', 'Ucast\Api\Controllers\Camera');

Route::get('/api/cam/{id}', function ($id) {
//	return CameraModel::all()->toArray();;

    	if ($id){

			CameraModel::where('camera_id', $id)->update(['description' => 'hahah'.$id]);

			return 'OK';
    	}else
    		return "null";


});


Route::get('/api/new/', function () {
//	return CameraModel::all()->toArray();;

	$cam = new CameraModel;
	$cam->name = 'CreateByAPI';

	$cam->camera_id = 456789;

	$cam->save();

	return "OK";

});



Route::get('/api/refresh', function () {
//	return CameraModel::all()->toArray();;

	$cams = CameraModel::all();
	foreach ($cams as $cam) {

		$cam->name .= '_CreateByAPI';
		$cam->camera_id += 456789;
		$cam->save();
	}

	return "OK";


});


Route::get('/api/login', function () {
//	return CameraModel::all()->toArray();;

    $remember = true;
    $user = Auth::authenticate([
        'login' => 'zhukanjie@xiaomi.com',
        'password' => '1234'
    ], $remember);


	return "OK";

});



Route::get('/api/login_check', function () {
		$user = Auth::getUser();
		if($user == null) return "no body.";
		else return $user->toJson();
});

Route::get('/api/login_check', function () {
		$user = Auth::getUser();
		if($user == null) return "no body.";
		else return $user->toJson();
});
