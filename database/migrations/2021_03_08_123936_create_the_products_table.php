<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Stock');
            $table->string('Category');
            $table->string('Photo');
            $table->text('Description');
            $table->string('Condition');
            $table->double('Price',10,2);
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
        Schema::dropIfExists('the_products');
    }
}
