<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
     {
   Schema::create('social_scores', function (Blueprint $table)
        {
            $table->id();
            $table->Integer('meta');
            $table->Integer('insta');
            $table->Integer('x');
            $table->Integer('google');
            $table->string('vlastni_sit')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('soc_sc');
    }
};
