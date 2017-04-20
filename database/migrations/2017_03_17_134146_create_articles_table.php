<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('excerpt'); //Excerpt is small part of body to show on summary pages
            $table->string('body');
            $table->string('type'); //Types are: Testimonial, Video, Text

            //Links still need to be optimized. For now an article can have 2 images (or 1 img 1 video) links
            $table->string('link1');
            $table->string('link2');
            $table->boolean('approved')->default(true);
            $table->timestamps();

            //link article to creating editor            
            $table->foreign('user_id')
                  ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
