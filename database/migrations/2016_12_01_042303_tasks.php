<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('category_id');
            $table->string('title');
            $table->text('description');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tasks');
    }
}
