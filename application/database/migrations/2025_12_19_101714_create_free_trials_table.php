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
        Schema::create('free_trials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40);
            $table->string('email');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();
            $table->integer('quantity');
            $table->string('service_name');

            $table->string('media_id', 100)->nullable();
            $table->longText('file')->nullable();
            $table->string('link')->nullable();

            $table->text('instruction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_trials');
    }
};
