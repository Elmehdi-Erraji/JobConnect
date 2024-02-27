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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('domain');
            $table->string('local');
            $table->decimal('salary', 10, 2);
            $table->text('description');
            $table->foreignId('education_level_id')->nullable()->constrained('education_levels')->onDelete('cascade');
            $table->foreignId('profession_id')->nullable()->constrained('professions')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->foreignId('contract_id')->nullable()->constrained('contracts')->onDelete('cascade');
            $table->foreignId('entreprise_id')->nullable()->constrained('entreprises')->onDelete('cascade');

            $table->unsignedBigInteger('created_by');

            $table->timestamps();
        });

        Schema::create('offer_user', function (Blueprint $table) {
            $table->foreignId('offer_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('request_status')->nullable(); 
            $table->text('description')->nullable(); 
            $table->primary(['offer_id', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('offer_user');
        Schema::dropIfExists('offers');
    }
};



