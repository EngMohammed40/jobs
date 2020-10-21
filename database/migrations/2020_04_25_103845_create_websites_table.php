<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->string('slug')->unique()->nullable();
            $table->string('link');
            $table->string('description');
            $table->string('keywords')->nullable();
            $table->string('contact_number')->nullable();

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                    ->references('id')->on('countries')
                    ->onDelete('cascade');

            $table->string('address');

            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')
                    ->references('id')->on('languages')
                    ->onDelete('cascade');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            
            $table->string('background_color')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('rating')->default(0);
            $table->integer('visits')->default(0);
            $table->integer('approved')->default(0);
            $table->unsignedInteger('update_id')->default(0);
            $table->softDeletes();

            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
