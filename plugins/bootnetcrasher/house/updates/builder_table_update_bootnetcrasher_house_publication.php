<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherHousePublication extends Migration
{
    public function up()
    {
        Schema::rename('bootnetcrasher_house_maison', 'bootnetcrasher_house_publication');
    }
    
    public function down()
    {
        Schema::rename('bootnetcrasher_house_publication', 'bootnetcrasher_house_maison');
    }
}
