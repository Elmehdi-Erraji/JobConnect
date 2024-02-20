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
        // Profiles Table
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('cv')->nullable();
            $table->string('image')->nullable();
            $table->text('motivation')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('education_level_id')
                ->nullable()
                ->constrained('education_levels')
                ->onDelete('cascade'); 
            $table->foreignId('profession_id')
                ->nullable()
                ->constrained('professions')
                ->onDelete('cascade'); 
            $table->softDeletes(); 
            $table->timestamps();
        });

        
        Schema::create('profile_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });

        
        Schema::create('profile_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('experience_id');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });

        
        Schema::create('profile_formation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('formation_id');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_skill');
        Schema::dropIfExists('profile_experience');
        Schema::dropIfExists('profile_formation');
        Schema::dropIfExists('profiles');
    }
};
