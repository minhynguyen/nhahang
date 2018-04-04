<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->unsignedTinyInteger('nv_ma')->autoIncrement()->comment('Mã Loại');
            $table->string('nv_ten', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('nv_diachi', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('nv_sdt', 11)->comment('Tên chủ đề # Tên chủ đề');
            $table->string('nv_email', 50)->comment('Tên chủ đề # Tên chủ đề');
            $table->timestamp('nv_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề');
            $table->timestamp('nv_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật chủ đề gần nhất');
            $table->tinyInteger('nv_trangthai')->default('2')->comment('Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng');
            $table->unsignedTinyInteger('q_ma');
            $table->foreign('q_ma')->references('q_ma')->on('quyen')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unique(['nv_email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
