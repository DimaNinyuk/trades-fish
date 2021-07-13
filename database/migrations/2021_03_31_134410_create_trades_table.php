<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->decimal('start_price', $precision = 19, $scale = 2);
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->timestamps();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
