<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default("User"); 
            /**
            *Current user roles are: Admin / Editor / Approver / User / Student
            * Admin is super user -> can do everything everyone else can. Admin also gives roles to other users.
            * Editor is the main source for articles
            * Approver checks the articles and either approves or declines them depending on quality.
            * User is the main visitor of the website. Hopefully students that want to come to antwerp. 
            * Student users are students from Antwerp (this is here for future chat functionality)
            */
            $table->rememberToken();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('comments');


    }
}
