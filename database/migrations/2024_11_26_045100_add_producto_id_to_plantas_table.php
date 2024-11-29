<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddProductoIdToPlantasTable extends Migration
{
    public function up()
    {
        Schema::table('plantas', function (Blueprint $table) {
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    public function down()
    {
        Schema::table('plantas', function (Blueprint $table) {});
    }
}
