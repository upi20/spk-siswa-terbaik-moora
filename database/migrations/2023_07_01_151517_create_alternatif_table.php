<?php

use App\Models\Alternatif;
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
            $table->text('alamat')->nullable()->default(null);
            $table->text('deskripsi')->nullable()->default(null);
            $table->timestamps();
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
