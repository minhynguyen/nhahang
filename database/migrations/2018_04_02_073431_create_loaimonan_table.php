<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaimonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaimonan', function (Blueprint $table) {
            $table->unsignedTinyInteger('lma_ma')->autoIncrement()->comment('Mã Loại');
            $table->string('lma_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->timestamp('lma_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề');
            $table->timestamp('lma_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chủ đề gần nhất');
            $table->tinyInteger('lma_trangthai')->default('2')->comment('Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng');
            
            $table->unique(['lma_ma', 'lma_ten']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaimonan');
    }
}
