<?php namespace SHI\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShiContact2 extends Migration
{
    public function up()
    {
        Schema::table('shi_contact_', function($table)
        {
            $table->string('phone')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shi_contact_', function($table)
        {
            $table->dropColumn('phone');
        });
    }
}
