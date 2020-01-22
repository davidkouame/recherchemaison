<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherHousePublication2 extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_house_publication', function($table)
        {
            $table->timestamp('published_at')->nullable();
            $table->integer('agence_id')->nullable();
            $table->integer('demarcheur_id')->nullable();
            $table->integer('admin_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_house_publication', function($table)
        {
            $table->dropColumn('published_at');
            $table->dropColumn('agence_id');
            $table->dropColumn('demarcheur_id');
            $table->dropColumn('admin_id');
        });
    }
}
