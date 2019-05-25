<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemenBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semen_buyer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('semen_id');
            $table->integer('balance');
            $table->integer('price');
            $table->integer('total_amount');
            $table->integer('total_quantity');
            $table->integer('other_expenses');
            $table->foreign('semen_id')->references('id')->on('semens')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('semen_buyer');
    }
}
