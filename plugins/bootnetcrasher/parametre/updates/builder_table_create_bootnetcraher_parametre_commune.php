<?php namespace bootnetcrasher\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatebootnetcrasherParametreCommune extends Migration
{
    public function up()
    {
        Schema::create('bootnetcrasher_parametre_commune', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('libelle');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bootnetcrasher_parametre_commune');
    }
}
