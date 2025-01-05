<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    public function up()
{
    Schema::create('siswa1', function (Blueprint $table) {
        $table->id();
        $table->string('nis');
        $table->string('nama');
        $table->string('alamat');
        $table->string('no_hp');
        $table->string('jenis_kelamin');
        $table->string('hobi');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
