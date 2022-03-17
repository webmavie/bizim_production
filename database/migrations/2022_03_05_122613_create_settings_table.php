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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_image');
            $table->string('title')->nullable();
            $table->longText('about');
            $table->string('about_image');
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->double('partners')->default(true);
            $table->double('our_team')->default(true);
            $table->double('models')->default(true);
            $table->longText('model_title')->nullable();
            $table->string('model_image')->nullable();
            $table->longText('site_description')->nullable();
            $table->string('partners_title')->nullable();
            $table->string('our_team_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
