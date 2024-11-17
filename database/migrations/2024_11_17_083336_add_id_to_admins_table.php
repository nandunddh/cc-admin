<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Drop AUTO_INCREMENT from 'doctor_id' if it's already there
        Schema::table('admins', function (Blueprint $table) {
            $table->dropPrimary('doctor_id');  // Drop the primary key if 'doctor_id' is the PK
            $table->integer('doctor_id')->unsigned()->nullable()->change();  // Remove AUTO_INCREMENT from doctor_id
        });

        // Add the new 'id' column
        Schema::table('admins', function (Blueprint $table) {
            $table->increments('id');  // Add the new auto-incrementing 'id' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Drop the 'id' column and restore the old 'doctor_id' column settings
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('id');
        });
        
        // Optionally, restore the original primary key if necessary
        Schema::table('admins', function (Blueprint $table) {
            $table->primary('doctor_id');
        });
    }
};
