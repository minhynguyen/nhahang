<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComboTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo', function (Blueprint $table) {
            $table->unsignedTinyInteger('cb_ma')->autoIncrement()->comment('Mã Loại');
            $table->string('cb_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->text('cb_mota')->comment('Nội Dung đánh giá');
            
            $table->timestamp('cb_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề');
            $table->timestamp('cb_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chủ đề gần nhất');
            $table->tinyInteger('cb_trangthai')->default('2')->comment('Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng');
            
            $table->unique(['cb_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combo');
    }
}
