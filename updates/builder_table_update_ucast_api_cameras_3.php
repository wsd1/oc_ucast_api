<?php namespace Ucast\Api\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUcastApiCameras3 extends Migration
{
    public function up()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->integer('user_id')->nullable()->unsigned();
            $table->dropColumn('owner');
        });
    }
    
    public function down()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->dropColumn('user_id');
            $table->string('owner')->nullable();
        });
    }
}
