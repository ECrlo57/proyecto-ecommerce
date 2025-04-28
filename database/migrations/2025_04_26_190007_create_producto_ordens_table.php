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
        Schema::create('producto_orden', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('orden_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('orden_id')->references('id')->on('ordens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_ordens');
    }
};
