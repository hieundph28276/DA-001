<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name'); //tên người dùng
            $table->text('address');
            $table->string('house');//số nhà
            $table->string('street');// tỉnh
            $table->string('district');//huyện
            $table->string('commune');// xã
            $table->integer('phone');
            $table->string('email');
            $table->integer('status')->default(0);
            $table->decimal('totalPrice');
            $table->string('notes');
            $table->timestamps();
            $table->softDeletes(); // add
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
