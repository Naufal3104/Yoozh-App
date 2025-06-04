<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_transaction')->unsigned();
            $table->foreign('id_transaction')->references('id')->on('transactions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')->on('products')
                ->onUpdate('set null')
                ->onDelete('cascade');
            $table->integer('qty');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
