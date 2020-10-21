<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                    ->references('id')->on('cities')
                    ->onDelete('cascade');
                    
             $table->unsignedBigInteger('website_id');
            $table->foreign('website_id')
                    ->references('id')->on('websites')
                    ->onDelete('cascade');
            
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
        Schema::dropIfExists('websites_cities');
    }
}
