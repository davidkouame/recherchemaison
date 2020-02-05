<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherHousePublication3 extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_house_publication', function($table)
        {
            $table->string('slot')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_house_publication', function($table)
        {
            $table->dropColumn('slot');
        });
    }
}
