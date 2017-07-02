<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmaniImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armani_img', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_id',100);
            $table->string('img_thm',100);
            $table->string('img_main',100);
            $table->string('img_small_1',100);
            $table->string('img_samall_2',100);
            $table->string('img_small_3',100)->nullable();
            $table->string('img_small_4',100)->nullable();
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
        Schema::dropIfExists('armani_img');
    }
}
