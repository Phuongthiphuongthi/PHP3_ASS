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
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('img', 255)->nullable();
            $table->text('content');
            $table->string('view');
            $table->timestamps();
            $table->foreignId('id_loaitin')->constrained('loai_tin');
            $table->foreignId('id_tacgia')->constrained('tac_gia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin');
    }
};



