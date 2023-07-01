<?php

use App\Models\Alternatif;
use App\Models\AlternatifNilai;
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
        Schema::create(AlternatifNilai::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('alternatif_id', false, true)->nullable()->default(null);
            $table->bigInteger('kriteria_id', false, true)->nullable()->default(null);
            $table->bigInteger('kirteria_nilai_id', false, true)->nullable()->default(null);
            $table->integer('nilai')->nullable()->default(0);
            $table->timestamps();

            $table->foreign('alternatif_id')->references('id')->on(Alternatif::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kriteria_id')->references('id')->on(Kriteria::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('kirteria_nilai_id')->references('id')->on(KriteriaNilai::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(AlternatifNilai::tableName);
    }
};
