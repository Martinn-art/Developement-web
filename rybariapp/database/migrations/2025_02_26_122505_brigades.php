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
        Schema::create('brigades', function (Blueprint $table) {

        $table->id();
        $table->foreignId('user_id');
        $table->string('user_email');
        $table->string('user_name');
        $table->string('phone');
        $table->string('notes')->nullable();
        $table->timestamps();
        });
    }

};
