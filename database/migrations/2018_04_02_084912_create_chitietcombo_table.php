<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietcomboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietcombo', function (Blueprint $table) {
            $table->Biginteger('ma_ma')->unsigned()->comment('Mã nhà trọ');
            $table->Tinyinteger('cb_ma')->unsigned()->comment('Mã tiện ích');
            $table->Tinyinteger('cb_soluong')->unsigned()->comment('Mã tiện ích');
            $table->unsignedInteger('cb_gia')->unsigned()->comment('Mã tiện ích');
            $table->primary(['ma_ma', 'cb_ma']);

            $table->foreign('ma_ma')->references('ma_ma')->on('monan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('cb_ma')->references('cb_ma')->on('combo')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietcombo');
    }
}
