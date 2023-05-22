<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $fillable = ['nama', 'alamat', 'jumlahsiswa', 'jumlahguru', 'kepalasekolah', 'foto'];
}
