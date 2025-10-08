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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('priority')->nullable()->comment('اولویت نمایش');
            $table->string('title')->nullable()->comment('عنوان');
            $table->string('en_title')->nullable()->comment('عنوان انگلیسی');
            $table->string('sub_title')->nullable()->comment('زیرمجموعه');
            $table->string('slug')->nullable()->comment('عنوان');
            $table->string('item1')->nullable()->comment('1 موردی');
            $table->string('item2')->nullable()->comment('2 موردی');
            $table->unsignedBigInteger('item3')->nullable()->comment('3 موردی');
            $table->string('item4')->nullable()->comment('4 موردی');
            $table->string('item5')->nullable()->comment('5 موردی');
            $table->string('price')->nullable()->comment('هزینه خدمات');
            $table->string('cover')->nullable()->comment('تصویر نمایش');
            $table->string('file_path')->nullable()->comment('فایل خدمات');
            $table->string('product_id')->nullable()->comment('سریال خدمات');
            $table->string('product_type')->nullable()->comment('نوع خدمات');
            $table->string('product_use')->nullable()->comment('نوع استفاده خدمات');
            $table->string('product_time')->nullable()->comment('زمان خدمات');
            $table->string('level')->nullable()->comment('سطح نمایش برای کاربران');
            $table->text('description')->nullable()->comment('توضیحات خدمات');
            $table->text('full_description')->nullable()->comment('توضیحات کامل خدمات');
            $table->string('start_date')->nullable()->comment('تاریخ شروع');
            $table->string('end_date')->nullable()->comment('تاریخ پایان');
            $table->string('exp_date')->nullable()->comment('تاریخ انقضا');
            $table->boolean('certificate')->nullable()->comment('دارای گواهینامه');
            $table->string('cover_certificate')->nullable()->comment('تصویر گواهینامه');
            $table->string('type_certificate')->nullable()->comment('نوع گواهینامه');
            $table->unsignedBigInteger('price_certificate')->nullable()->comment('هزینه گواهینامه');
            $table->unsignedBigInteger('state')->nullable()->comment('استان');
            $table->unsignedBigInteger('city')->nullable()->comment('شهرستان');
            $table->unsignedBigInteger('count_view')->nullable()->comment('شمارنده بازدید');
            $table->unsignedBigInteger('count_click')->nullable()->comment('شمارنده کلیک');
            $table->unsignedBigInteger('count_download')->nullable()->comment('شمارنده دانلود');
            $table->tinyInteger('status')->comment('وضعیت');
            $table->unsignedBigInteger('user_id')->nullable()->comment('کاربر ');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
