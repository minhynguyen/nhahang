<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->tinyIncrements('q_ma');
            $table->string('q_ten', 30);
            $table->string('q_diengiai', 191)->nullable();
            $table->timestamp('q_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('q_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('q_trangthai')->default('2');
            $table->unique('q_ten');
//            $table->nullable('q_diengiai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
