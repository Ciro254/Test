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
        Schema::table('automezzos', function (Blueprint $table) {
    
            $table->foreign('filiale_id')->references('id')->on('filiales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('automezzos', function (Blueprint $table) {
            $table->dropForeign(['filiale_id']);
        });
    }
};
