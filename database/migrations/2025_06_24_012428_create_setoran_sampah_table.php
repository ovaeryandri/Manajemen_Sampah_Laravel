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
        Schema::create('setoran_sampah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('akun_users_id');
            $table->foreign('akun_users_id')
            ->references('id')
            ->on('akun_users')
            ->onDelete('cascade');
            $table->unsignedBigInteger('jenis_sampah_id');
            $table->foreign('jenis_sampah_id')
            ->references('id')
            ->on('jenis_sampah')
            ->onDelete('cascade');

            $table->float('berat_kg', '8', '2');
            $table->decimal('total_harga', '12', '2');
            $table->enum('status', ['pending', 'disetujui', 'ditolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setoran_sampah');
    }
};
