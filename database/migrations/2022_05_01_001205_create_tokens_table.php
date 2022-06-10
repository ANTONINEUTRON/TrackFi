<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->string("id",100)->primary();
            $table->text("name");
            $table->string("unit_name",100);
            $table->double("price");
            $table->double("price_change_24");
            $table->text("totalSupply");
            $table->text("url");
            $table->integer("decimals");
            $table->double("market_cap");
            $table->text("circulating_supply");
            $table->double("volume24h");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}
