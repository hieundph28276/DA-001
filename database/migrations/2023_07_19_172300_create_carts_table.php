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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('phone_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('image');
            $table->decimal('price');
            $table->unsignedBigInteger('invoice_details');
            $table->integer('quantity');
            $table->decimal('total_amount');
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
        Schema::dropIfExists('carts');
    }
};
