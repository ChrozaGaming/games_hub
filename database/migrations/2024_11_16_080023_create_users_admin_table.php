<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAdminTable extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('users_admin', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama admin
            $table->string('email')->unique(); // Email admin
            $table->string('password'); // Password admin
            $table->integer('credits')->default(0); // Credits untuk admin
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_admin');
    }
}
