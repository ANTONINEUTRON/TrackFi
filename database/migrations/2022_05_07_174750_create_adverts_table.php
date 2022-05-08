<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->text("organization");
            $table->string("email",150);
            $table->integer("views");
            $table->integer("clicks");
            $table->integer("views_gotten")->default(0);
            $table->integer("clicks_gotten")->default(0);
            $table->text("large_banner_url");
            $table->text("small_banner_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
