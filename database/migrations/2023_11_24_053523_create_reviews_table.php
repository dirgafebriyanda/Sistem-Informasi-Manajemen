<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    public function up()
    {
       Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job'); 
            $table->string('contact');
            $table->integer('rating');
            $table->text('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
