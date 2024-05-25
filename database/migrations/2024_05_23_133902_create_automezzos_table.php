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
        Schema::create('automezzos', function (Blueprint $table) {
            $table->id();
            $table->string('targa')->unique();
            $table->string('marca');
            $table->string('modello');
            $table->unsignedBigInteger('filiale_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automezzos');

    }
};
