<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('id_book')->unsigned();
                $table->foreign('id_book')->references('id')->on('books');
                $table->integer('id_customer')->unsigned();
                $table->foreign('id_customer')->references('id')->on('customers');
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
        Schema::dropIfExists('loans');
    }
}
