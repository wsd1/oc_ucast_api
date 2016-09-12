<?php namespace Ucast\Api;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
}
