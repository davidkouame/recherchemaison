<?php namespace Bootnetcrasher\Parametre\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherParametreLocalisation extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_parametre_localisation', function($table)
        {
            $table->integer('commune_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_parametre_localisation', function($table)
        {
            $table->dropColumn('commune_id');
        });
    }
}
