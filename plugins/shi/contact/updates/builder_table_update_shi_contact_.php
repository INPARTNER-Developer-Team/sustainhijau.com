<?php namespace SHI\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShiContact extends Migration
{
    public function up()
    {
        Schema::table('shi_contact_', function($table)
        {
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('shi_contact_', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('company');
            $table->dropColumn('email');
            $table->dropColumn('message');
        });
    }
}
