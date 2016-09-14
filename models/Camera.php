<?php namespace Ucast\Api\Models;

use Model;

/**
 * Model
 */
class Camera extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ucast_api_cameras';


    public $belongsTo = [
        'user' => '\RainLab\User\Models\User'
    ];

//    public $belongsTo = [
//        'parent'    => ['User', 'key' => 'parent_id'],
//    ];


}