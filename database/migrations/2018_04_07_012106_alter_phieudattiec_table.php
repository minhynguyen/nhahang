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
            $table->unsignedInteger('pdt_coc')->unsigned()->comment('Mã tiện ích');
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
