<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'pimpinan';
    protected $fillable = ['organisasi', 'masajabatan', 'tipejabatan', 'nama', 'foto'];
}
