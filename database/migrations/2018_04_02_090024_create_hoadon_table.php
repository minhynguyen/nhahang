<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->bigIncrements('hd_ma');
            $table->unsignedBigInteger('b_ma')->comment('Mã Nhà Trọ');
            $table->unsignedTinyInteger('kh_ma')->comment('Mã Nhà Trọ');
            $table->unsignedTinyInteger('nv_ma')->comment('Mã Nhà Trọ');
            $table->unsignedInteger('hd_tongtien')->default('0')->comment('Giá điện cho thuê');
            $table->timestamp('hd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->timestamp('hd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->tinyInteger('hd_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');

            $table->foreign('b_ma')->references('b_ma')->on('ban')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
