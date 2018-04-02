<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuvucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuvuc', function (Blueprint $table) {
            $table->unsignedTinyInteger('kv_ma')->autoIncrement()->comment('Mã Loại');
            $table->string('kv_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
                
            $table->timestamp('kv_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            $table->timestamp('kv_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo bình luận');
            
            $table->tinyInteger('kv_trangthai')->default('2')->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuvuc');
    }
}
