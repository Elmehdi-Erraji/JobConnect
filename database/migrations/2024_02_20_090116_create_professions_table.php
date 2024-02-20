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
        Schema::create('professions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        // Schema::table('profiles', function (Blueprint $table) {
        //     $table->foreignId('profession_id')
        //         ->nullable()
        //         ->constrained('professions')
        //         ->onDelete('cascade'); 
        // });

        // Schema::table('offers', function (Blueprint $table) {
        //     $table->foreignId('profession_id')
        //         ->nullable()
        //         ->constrained('professions')
        //         ->onDelete('cascade'); 
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professions');
    }
};
