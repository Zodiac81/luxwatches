<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeMenWatchesArmaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('men_watches_armani', function (Blueprint $table) {
            //
            $table->string('product_id', 100)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('men_watches_armani', function (Blueprint $table) {
            Schema::dropIfExists('men_watches_armani');
        });
    }
}
