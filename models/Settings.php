<?php namespace Ucast\Restapi\Models;

use Model;


class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    // A unique code
    public $settingsCode = 'ucast_restapi_settings';
    // Reference to fields configuration
    public $settingsFields = 'fields.yaml';
}

