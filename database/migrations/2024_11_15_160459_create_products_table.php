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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_image');
            $table->string('product_price');
            $table->string('image_url'); 
            $table->integer('quantity');
            $table->decimal("unit_price",10,2);
            $table->decimal("total_price",10,2);
            $table->text("remark");
            $table->timestamp('created_at')->nullable(); // Custom created_at column
            $table->timestamp('updated_at')->nullable(); // Custom updated_at column
            $table->foreignId("user_id")->constrained("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
