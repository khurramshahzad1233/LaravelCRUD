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
        Schema::create('names', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('password');
		    $table->boolean('status');
		    $table->integer('points');
            $table->string('email',100);
		    $table->text('address');
		    $table->date('don')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('names');
    }
};
