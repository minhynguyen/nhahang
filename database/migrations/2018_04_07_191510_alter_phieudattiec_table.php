<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPhieudattiecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phieudattiec', function (Blueprint $table) {
            $table->unsignedBigInteger('b_ma')->comment('Mã Nhà Trọ');
            $table->foreign('b_ma')->references('b_ma')->on('ban')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phieudattiec', function (Blueprint $table) {
            //
        });
    }
}
