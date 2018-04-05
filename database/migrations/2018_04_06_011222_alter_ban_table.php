<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ban', function (Blueprint $table) {
            $table->tinyInteger('b_tinhtrang')->default('0')->comment('Trạng thái # Trạng thái chủ đề: 0-TRỐNG, 1-CÓ KHÁCH');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ban', function (Blueprint $table) {
            //
        });
    }
}
