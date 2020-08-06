<?php namespace bootnetcrasher\House\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBootnetcrasherHouseAgence extends Migration
{
    public function up()
    {
        Schema::table('bootnetcrasher_house_agence', function($table)
        {
            $table->string('email_agence', 191);
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('email')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('bootnetcrasher_house_agence', function($table)
        {
            $table->dropColumn('email_agence');
            $table->dropColumn('nom');
            $table->dropColumn('prenom');
            $table->string('email', 191)->nullable(false)->change();
        });
    }
}
