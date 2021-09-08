<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('body_1')->nullable();
            $table->string('body_2')->nullable();
            $table->string('body_3')->nullable();
            $table->string('body_4')->nullable();
            $table->string('body_5')->nullable();
            $table->string('body_6')->nullable();
            $table->string('body_7')->nullable();
            $table->string('category')->nullable();

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
        Schema::dropIfExists('blogposts');
    }
}
