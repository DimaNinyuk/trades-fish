<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->decimal('price',$precision = 19, $scale = 2)->nullable();
            $table->unsignedBigInteger('trade_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->timestamps();
            $table->foreign('trade_id')->references('id')->on('trades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
