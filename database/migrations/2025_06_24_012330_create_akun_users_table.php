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
        Schema::create('akun_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->enum('role', ['operator', 'nasabah']);
            $table->string('no_hp');
            $table->decimal('deposit', '12', '2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
