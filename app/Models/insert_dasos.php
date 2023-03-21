<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insert_dasos extends Model
{
    use HasFactory;

    protected $table = 'TC_MR';
    protected $fillable = [
        'nama', 'sex', 'agama', 'status_nikah', 'pendidikan', 'pekerjaan', 'npwp', 'no_identitas', 'no_kk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'provinsi', 'kelurahan', 'kecamatan',
        'no_tlp', 'nm_kerabat', 'hubungan', 'no_tlp_kerabat', 'alamat_kerabat', 'petugas'
    ];
}
