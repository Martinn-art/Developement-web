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
        Schema::create('reservation_povolenky', function (Blueprint $table) {
            $table->id();
            $table->date('pickup_at');
            $table->string('title');
            $table->string('description')->nullable();
            $table->timestamps();


        });




    }


};
