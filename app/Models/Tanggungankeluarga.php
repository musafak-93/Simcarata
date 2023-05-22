<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Tanggungankeluarga extends Model
{
    use HasFactory;
    protected $table = 'tanggungankeluarga';
    protected $fillable = ['bapak', 'ibu', 'hubungankeluarga', 'nama', 'tempat_lahir', 'tanggal_lahir', 'pendidikan', 'pekerjaan', 'jeniskelamin'];
}
