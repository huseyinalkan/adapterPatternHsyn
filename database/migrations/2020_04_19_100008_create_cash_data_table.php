<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('api_name')->comment('data kaydedilen api adı saklandığı alan');
            $table->text('price_type')->comment('Döviz türünün saklandığı alan');
            $table->unsignedDecimal('price_amount')->comment('Döviz değerinin saklandığı alan');
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
        Schema::dropIfExists('cash_data');
    }
}
