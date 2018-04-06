<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdattiecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdattiec', function (Blueprint $table) {
            $table->Biginteger('ma_ma')->unsigned()->comment('Mã nhà trọ');
            $table->Biginteger('pdt_ma')->unsigned()->comment('Mã tiện ích');
            $table->Tinyinteger('ma_soluong')->unsigned()->comment('Mã tiện ích');
            $table->unsignedInteger('pdt_coc')->unsigned()->comment('Mã tiện ích');
            $table->primary(['ma_ma', 'pdt_ma']);

            $table->foreign('ma_ma')->references('ma_ma')->on('monan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('pdt_ma')->references('pdt_ma')->on('phieudattiec')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdattiec');
    }
}
