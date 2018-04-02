<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monan', function (Blueprint $table) {
            $table->bigIncrements('ma_ma');
            $table->unsignedTinyInteger('lma_ma')->comment('Mã Nhà Trọ');
            $table->text('ma_mota')->comment('Nội Dung đánh giá');
            $table->text('ma_hinhanh')->comment('Nội Dung đánh giá');
            $table->unsignedInteger('ma_dongia')->default('0')->comment('Giá điện cho thuê');
            $table->timestamp('ma_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->timestamp('ma_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->tinyInteger('ma_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');

            $table->foreign('lma_ma')->references('lma_ma')->on('loaimonan')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monan');
    }
}
