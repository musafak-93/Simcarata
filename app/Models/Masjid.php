<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Masjid extends Model
{
    use HasFactory;
    protected $table = 'masjid';
    protected $fillable = ['nama', 'alamat', 'takmir', 'jumlahjamaah'];
}
