<?php namespace Ucast\Api\Controllers;

use Ucast\Api\Models\Camera as CameraModel;
use Auth;

use Backend\Classes\Controller;
use BackendMenu;

class Camera extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
    }





    public function apiIndex()
    {


      return CameraModel::all()->toArray();;
    }

    public function apiFoo()
    {


//		$user = Auth::getUser();
//		if($user == null) return "no body.";
//		else return $user->toJson();

    	//$camid = $request->input('id');
    	$camid = 3;
    	if ($camid){

			CameraModel::where('camera_id', '=', $camid)->update(['description' => 'updated'.$camid]);

			return 'OK';
    	}else
    		return "null";






    }









    /* Functions to allow RESTful actions */
    public static function getAfterFilters() 
    {
    	return [];
    }

    public static function getBeforeFilters() 
    {
    	return [];
    }

    public static function getMiddleware() 
    {
    	return [];
    }

    public function callAction($method, $parameters=false) 
    {
    	$action = 'api' . ucfirst($method);
    	if (method_exists($this, $action) && is_callable(array($this, $action)))
    	{
    		return call_user_func_array(array($this, $action), $parameters);
    	} else {
    		return response()->json([
    			'message' => 'Not Found'], 404);
    	}

    }





}