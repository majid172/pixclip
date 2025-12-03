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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('uuid');
            $table->string('phone', 20)->nullable();
            $table->string('profile_img', 255)->nullable();
            $table->text('address')->nullable();
            $table->text('billing_address_id')->nullable();
            $table->integer('post_code')->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->integer('country_id')->nullable();
            $table->text('avatar')->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->tinyInteger('is_user')->default(1);

            $table->string('locale', 255)->default('');
            $table->string('timezone', 255)->default('');

            $table->string('ip', 40)->nullable();
            $table->timestamp('last_access_at')->nullable();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
