<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();//khong duoc phep trung
            $table->text('message');
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
        Schema::dropIfExists('vp_contact');
    }
}
