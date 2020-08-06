<?php namespace Bootnetcrasher\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBootnetcrasherParametreTypePublicationId extends Migration
{
    public function up()
    {
        Schema::create('bootnetcrasher_parametre_type_publication_id', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('libelle');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bootnetcrasher_parametre_type_publication_id');
    }
}
