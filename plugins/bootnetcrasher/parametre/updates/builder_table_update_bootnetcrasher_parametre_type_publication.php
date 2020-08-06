<?php namespace Bootnetcrasher\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherParametreTypePublication extends Migration
{
    public function up()
    {
        Schema::rename('bootnetcrasher_parametre_type_publication_id', 'bootnetcrasher_parametre_type_publication');
    }
    
    public function down()
    {
        Schema::rename('bootnetcrasher_parametre_type_publication', 'bootnetcrasher_parametre_type_publication_id');
    }
}
