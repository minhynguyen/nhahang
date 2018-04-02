<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->unsignedTinyInteger('kh_ma')->autoIncrement()->comment('Mã Loại');
            $table->string('kh_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('kh_email', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('kh_sdt', 11)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('kh_diachi', 150)->comment('Tên chủ đề # Tên chủ đề');
            $table->timestamp('kh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->timestamp('kh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->tinyInteger('kh_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
