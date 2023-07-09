<?php

use App\Models\Alternatif;
use App\Models\Import\Alternatif as ImportAlternatif;
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
        Schema::create(Alternatif::tableName, function (Blueprint $table) {
            $table->id();
            $table->text('nama')->nullable()->default(null);
            $table->text('slug')->nullable()->default(null);
            $table->text('kelas')->nullable()->default(null);
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('import_id')->references('id')->on(ImportAlternatif::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Alternatif::tableName);
    }
};
