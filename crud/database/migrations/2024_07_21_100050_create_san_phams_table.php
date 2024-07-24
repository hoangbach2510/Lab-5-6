<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table -> string('hinh_anh') -> nullable();
            $table -> string('ten_san_pham');
            $table -> unsignedInteger('so_luong');
            $table -> double ('gia', 10, 2);
            $table -> date('ngay_nhap');
            $table -> text ('mo_ta');
            $table -> unsignedBigInteger('danh_muc_id');

            $table -> foreign('danh_muc_id')->references('id')-> on('danh_mucs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
