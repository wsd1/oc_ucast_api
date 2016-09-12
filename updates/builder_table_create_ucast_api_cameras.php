<?php namespace Ucast\Api\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUcastApiCameras extends Migration
{
    public function up()
    {
        Schema::create('ucast_api_cameras', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('camera_id');
            $table->string('camera_ctx')->nullable();
            $table->dateTime('activate')->nullable();
            $table->dateTime('last_seen')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ucast_api_cameras');
    }
}
