<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites_sections', function (Blueprint $table) {
            $table->unsignedBigInteger('website_id');
            $table->unsignedBigInteger('section_id');

            //FOREIGN KEY CONSTRAINTS
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
 
            //SETTING THE PRIMARY KEYS
            $table->primary(['website_id','section_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites_sections');
    }
}
