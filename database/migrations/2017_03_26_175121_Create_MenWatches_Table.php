<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('men_watches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('alias',100);
            $table->text('desc');
            $table->string('price',50);
            $table->text('add_info',150);
            $table->text('review',250);
            $table->string('delivery',100);
            $table->string('image',100);
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
        Schema::dropIfExists('men_watches');
    }
}
