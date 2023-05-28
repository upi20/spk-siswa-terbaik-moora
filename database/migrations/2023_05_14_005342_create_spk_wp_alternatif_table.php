<?php

use App\Models\SPK\WP\Alternatif;
use App\Models\SPK\WP\WP;
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
            $table->bigInteger('spk_id', false, true)->nullable()->default(null);
            $table->text('nama')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('spk_id')->references('id')->on(WP::tableName)->cascadeOnDelete()->cascadeOnUpdate();
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
