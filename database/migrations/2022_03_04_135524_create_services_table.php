<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('main_image');
            $table->string('main_description');
            $table->string('col4')->default(false);

            $table->string('bg_image');
            $table->longText('description');
            $table->longText('site_description')->nullable();

            $table->double('questions_exists')->default(true);
            $table->json('questions')->nullable();

            $table->double('prices_exists')->default(true);
            $table->json('prices')->nullable();

            $table->double('included_in_cost_exists')->default(true);
            $table->json('included_in_cost')->nullable();
            
            $table->double('images_exists')->default(false);
            $table->double('videos_exists')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
