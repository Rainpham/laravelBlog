<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->text('detail');
            $table->string('images');
            $table->string('website_Address');
            $table->integer('categoryproduct_id')->unsigned();
            $table->foreign('categoryproduct_id')->references('id')->on('vp_category')->onDelete('cascade');
            $table->integer('parther_id')->unsigned();
            $table->foreign('parther_id')->references('id')->on('vp_parther')->onDelete('cascade');
            $table->integer('status')-> default(1);
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
        Schema::dropIfExists('vp_product');
    }
}
