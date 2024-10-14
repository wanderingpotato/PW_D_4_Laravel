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
        Schema::create('services', function (Blueprint $table) {
            $table->string('id_kamar_bookeds');
            $table->foreign('id_kamar_bookeds')->references('id_kamar_booked')->on('kamar_bookeds')->onDelete('cascade');
            $table->string('id_services');
            $table->foreign('id_services')->references('id_service')->on('jenis_services')->onDelete('cascade');
            $table->primary(['id_kamar_bookeds','id_services']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
