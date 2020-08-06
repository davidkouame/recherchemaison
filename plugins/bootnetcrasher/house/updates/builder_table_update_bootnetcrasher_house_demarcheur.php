<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherHouseDemarcheur extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_house_demarcheur', function($table)
        {
            $table->renameColumn('tel1', 'tel2');
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_house_demarcheur', function($table)
        {
            $table->renameColumn('tel2', 'tel1');
        });
    }
}
