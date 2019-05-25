<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('semen_id');
            $table->string('customer_name');
            $table->string('animal_type');
            $table->integer('tag_no');
            $table->text('animal_desc');
            $table->text('animal_health');
            $table->string('semen_name');
            $table->string('image');
            $table->string('recording');
            $table->date('hit_date');
            $table->date('pd_date');
            $table->date('delivery_date');
            $table->string('birth_gender');
            $table->integer('fee');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('visits');
    }
}
