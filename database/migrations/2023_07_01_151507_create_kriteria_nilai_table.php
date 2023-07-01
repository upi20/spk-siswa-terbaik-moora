<?php

use App\Models\Kriteria;
use App\Models\KriteriaNilai;
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
        Schema::create(KriteriaNilai::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kriteria_id', false, true)->nullable()->default(null);
            $table->text('nama')->nullable()->default(null);
            $table->integer('nilai')->nullable()->default(null);
            $table->integer('dari')->nullable()->default(0);
            $table->integer('sampai')->nullable()->default(0);
            $table->timestamps();

            $table->foreign('kriteria_id')->references('id')->on(Kriteria::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(KriteriaNilai::tableName);
    }
};
