<?php

use App\Models\Kriteria;
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
        Schema::create(Kriteria::tableName, function (Blueprint $table) {
            $table->id();
            $table->integer('bobot')->nullable()->default(null);
            $table->string('jenis')->nullable()->default(null);
            $table->text('nama')->nullable()->default(null);
            $table->text('slug')->nullable()->default(null);
            $table->string('kode')->nullable()->default(null);
            $table->integer('dari')->nullable()->default(0);
            $table->integer('sampai')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Kriteria::tableName);
    }
};
