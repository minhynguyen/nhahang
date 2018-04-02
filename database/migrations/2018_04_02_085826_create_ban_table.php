<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ban', function (Blueprint $table) {
            $table->bigIncrements('b_ma');
            $table->unsignedTinyInteger('kv_ma')->comment('Mã Nhà Trọ');
            $table->string('b_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            
            $table->timestamp('b_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->timestamp('b_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->tinyInteger('b_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');

            $table->foreign('kv_ma')->references('kv_ma')->on('khuvuc')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ban');
    }
}
