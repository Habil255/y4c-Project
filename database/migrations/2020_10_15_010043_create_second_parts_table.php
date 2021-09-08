<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_parts', function (Blueprint $table) {
            $table->id();
            $table->string('heading1');
            $table->string('description1');
            $table->string('image1');
            $table->string('list1');
            $table->string('list2');
            $table->string('list3');
            $table->string('list4');

            $table->string('heading2')->nullable();
            $table->string('description2')->nullable();
            $table->string('image2')->nullable();
            $table->string('list_1')->nullable();
            $table->string('list_2')->nullable();
            $table->string('list_3')->nullable();
            $table->string('list_4')->nullable();
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
        Schema::dropIfExists('second_parts');
    }
}
