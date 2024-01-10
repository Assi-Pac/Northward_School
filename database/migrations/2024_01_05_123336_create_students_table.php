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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('other_names');
            $table->string('matric_number')->unique();
            $table->string('faculty');
            $table->string('department');
            $table->string('gender');
            $table->string('level');
            $table->string('email');
            $table->string('phone');
            $table->string('year_of_admission');
            $table->string('age');
            $table->string('school_fess_status');
            $table->string('state_of_origin');
            $table->string('passport')->nullable();
            $table->string('password');
            $table->tinyInteger('verified_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
