<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('website_name');
            $table->string('website_logo');
            $table->string('website_currency');
            $table->string('website_description');
            $table->string('website_keywords');
            $table->string('website_email');
            $table->string('website_phone');
            $table->string('website_fax');
            $table->string('website_address');
            $table->string('website_mail');
            $table->string('website_facebook');
            $table->string('website_google');
            $table->string('website_twitter');
            $table->string('website_instagram');
            $table->string('website_youtube');
            $table->bigInteger('website_rating')->default(0);
            $table->bigInteger('website_visits')->default(0);
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
        Schema::dropIfExists('website_details');
    }
}
