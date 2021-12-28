<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThantaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thantais', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('address',255);
            $table->integer('telephonenumber');
            $table->timestamps();
            $table->string('branch');
            $table->string('message');
            // $table->string('img');
            $table->integer('qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thantais');
    }
}
