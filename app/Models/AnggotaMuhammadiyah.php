<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AnggotaMuhammadiyah extends Model
{
    use HasFactory;
    protected $table = 'anggotamuhammadiyah';
    protected $fillable = ['nama', 'nbm','tempat','tempat_lahir','tanggal_lahir','alamat','jenis_kelamin',
    'telepon','pekerjaan','golongan_darah','nama_pasangan','jumlah_keluarga','tipe_anggota','foto','status', 'ranting_muhammadiyah', 'ranting_aisyiyah'];
    
}
