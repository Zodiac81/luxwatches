<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchesTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('img_id');          
            $table->string('vendor_code',100);
            $table->string('title',100);
            $table->string('alias',100);
            $table->string('sex',10);
            $table->text('desc',250);
            $table->string('price',50);
            $table->string('discount',50);
            $table->string('status',10);
            $table->string('brend_country', 100);
            $table->string('kind', 100);
            $table->string('guarantee', 100);
            $table->string('series', 100);
            $table->string('brand_made', 100);
            $table->string('clock_size', 100);
            $table->string('calendar', 100);
            $table->string('lighting', 100);
            $table->string('body_size', 100);
            $table->string('strap', 100);
            $table->string('glas', 100);
            $table->string('clock_color', 100);
            $table->string('body_material', 100);
            $table->string('mechanism', 100);
            $table->string('style', 100);
            $table->string('mechanism_type', 100);
            $table->string('clasp', 100);
            $table->string('clasp_color', 100);
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
        Schema::dropIfExists('watches');
    }
}
