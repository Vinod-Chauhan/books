<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BooksCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('BooksCategoryTable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('parentid');
            $table->string('imageURL');
            $table->text('title');
            $table->text('description');
            $table->integer('courseid');
            $table->string('custom1');
            $table->string('custom2');
            $table->string('addedBy');
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
        //
    }
}
