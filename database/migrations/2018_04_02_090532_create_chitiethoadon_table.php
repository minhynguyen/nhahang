<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->Biginteger('ma_ma')->unsigned()->comment('Mã nhà trọ');
            $table->Biginteger('hd_ma')->unsigned()->comment('Mã tiện ích');
            $table->Tinyinteger('cthd_soluong')->unsigned()->comment('Mã tiện ích');
            $table->unsignedInteger('cthd_dongia')->unsigned()->comment('Mã tiện ích');
            $table->primary(['ma_ma', 'hd_ma']);

            $table->foreign('ma_ma')->references('ma_ma')->on('monan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('hd_ma')->references('hd_ma')->on('hoadon')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadon');
    }
}
