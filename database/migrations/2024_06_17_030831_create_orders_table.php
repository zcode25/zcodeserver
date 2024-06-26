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
        Schema::create('orders', function (Blueprint $table) {
            $table->char('orderId', 25)->primary();
            $table->date('orderDate');
            $table->string('clientName',100);
            $table->string('clientType',20);
            $table->string('clientEmail',50);
            $table->char('clientTel',15);
            $table->text('clientAddress');
            $table->string('businessName',100);
            $table->string('businessField',20);
            $table->text('businessDesc');
            $table->text('webDesc');
            $table->string('webLink',200)->nullable();
            $table->string('webDoc',200)->nullable();
            $table->string('webPackage', 20);
            $table->integer('price');
            $table->integer('discount');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
