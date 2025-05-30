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
        Schema::create('Rezervace', function (Blueprint $table){
            $table->id();
            $table->date('date');
            $table->string('title');
            $table->string('description');
            $table->date('reservedDate');
            $table->string('notes');
            $table->foreignId('user_id');
        });
    }

    
};
