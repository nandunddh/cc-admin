<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_id')->uniqid();
            $table->string('username');
            $table->string('doctor_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('npi')->nullable();
            $table->string('specialization')->nullable();
            $table->string('specialty_name')->nullable();
            $table->string('specialty_code')->nullable();
            $table->string('group_id')->nullable();
            $table->string('show_all')->nullable();
            $table->string('otp_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
