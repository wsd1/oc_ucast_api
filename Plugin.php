<?php namespace Ucast\Api;

use System\Classes\PluginBase;
use RainLab\User\Models\User;


class Plugin extends PluginBase
{

    public $require = ['RainLab.User', 'Autumn.JWTAuth'];


    public function registerComponents()
    {
    }

    public function registerSettings()
    {
         return [
            'settings' => [
                'label'       => 'Api Key',
                'description' => 'Manage your Api Key.',
                'category'    => 'uCast RestAPI',
                'icon'        => 'icon-cog',
                'class'       => 'Ucast\Api\Models\Settings',
                'order'       => 500
            ]
        ];
    }


    public function boot()
    {
        User::extend(function($model){

            $model->hasMany['cameras'] = ['Ucast\Api\Models\Camera'];

//            $model->belongsTo['team'] = ['Rafie\SitepointDemo\Models\Team'];
        });
    }

}
