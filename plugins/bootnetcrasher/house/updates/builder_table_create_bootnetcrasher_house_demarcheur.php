<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBootnetcrasherHouseDemarcheur extends Migration
{
    public function up()
    {
        Schema::create('bootnetcrasher_house_demarcheur', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('tel');
            $table->integer('tel1')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bootnetcrasher_house_demarcheur');
    }
}
