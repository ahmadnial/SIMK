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
        Schema::create('TC_MR', function (Blueprint $table) {
            $table->id();
            $table->string('mr', 8)->unique();
            $table->string('nama');
            $table->string('sex', 8);
            $table->string('agama', 10);
            $table->string('status_nikah', 10);
            $table->string('pendidikan', 10);
            $table->string('pekerjaan', 10);
            $table->string('npwp', 20);
            $table->string('no_identitas', 20);
            $table->string('no_kk', 20);
            $table->string('tempat_lahir', 20);
            $table->string('tanggal_lahir', 12);
            $table->string('alamat');
            $table->string('provinsi', 20);
            $table->string('kelurahan', 20);
            $table->string('kecamatan', 20);
            $table->string('no_tlp', 14);
            $table->string('nm_kerabat');
            $table->string('hubungan', 20);
            $table->string('no_tlp_kerabat', 14);
            $table->string('alamat_kerabat');
            $table->string('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tc_mr');
    }
};
