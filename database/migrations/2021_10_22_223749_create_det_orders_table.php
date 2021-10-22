<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('variety');
            $table->decimal('loadValue', 8, 2);
            $table->string('description', 200);
            $table->foreignId('idOrder')->constrained('orders');
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
        Schema::dropIfExists('det_orders');
    }
}
