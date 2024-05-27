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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->timestamps();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('country',255);
            $table->string('state',255);
            $table->text('address')->default('my home address');
            $table->enum('city',['lahore','karachi','islamabad']);
            $table->string('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
