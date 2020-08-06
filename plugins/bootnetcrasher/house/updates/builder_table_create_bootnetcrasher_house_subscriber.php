<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBootnetcrasherHouseSubscriber extends Migration
{
    public function up()
    {
        Schema::create('bootnetcrasher_house_subscriber', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bootnetcrasher_house_subscriber');
    }
}
