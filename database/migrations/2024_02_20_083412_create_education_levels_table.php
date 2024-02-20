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
        Schema::create('education_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->foreignId('education_level_id')
        //         ->nullable()
        //         ->constrained('education_levels')
        //         ->onDelete('cascade'); 
        // });

        // Schema::table('offers', function (Blueprint $table) {
        //     $table->foreignId('education_level_id')
        //         ->nullable()
        //         ->constrained('education_levels')
        //         ->onDelete('cascade'); 
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_levels');
    }
};
