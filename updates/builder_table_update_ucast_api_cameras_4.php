<?php namespace Ucast\Api\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUcastApiCameras4 extends Migration
{
    public function up()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->integer('user_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
