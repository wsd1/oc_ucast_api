<?php namespace Ucast\Api\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUcastApiCameras2 extends Migration
{
    public function up()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->string('owner')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ucast_api_cameras', function($table)
        {
            $table->dropColumn('owner');
        });
    }
}
