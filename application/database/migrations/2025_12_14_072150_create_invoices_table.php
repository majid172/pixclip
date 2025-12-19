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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
             $table->string('invoice_id')->nullable();

            $table->unsignedBigInteger('order_id')->index();

            // Stored like ["Clipping Path"]
            $table->json('service_name');

            $table->string('comments')->nullable();

            // Stored like ["1"]
            $table->json('qty');

            // Stored like ["2"]
            $table->json('price');

            // Stored like ["0"]
            $table->json('single_discount')->nullable();

            // Stored like ["2.00"]
            $table->json('row_sub_total');

            // Numeric totals
            $table->decimal('sub_total', 20, 2);
            $table->decimal('discount', 20, 2)->default(0);

            $table->enum('discount_type', ['Flat', 'Percent'])->default('Flat');

            $table->decimal('grand_total', 20, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
