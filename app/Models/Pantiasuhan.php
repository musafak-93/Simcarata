<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pantiasuhan extends Model
{
    use HasFactory;
    protected $table = 'pantiasuhan';
    protected $fillable = ['nama', 'alamat', 'jumlahsantri', 'pengurus', 'foto'];
}
