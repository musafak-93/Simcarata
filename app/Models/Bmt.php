<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Bmt extends Model
{
    use HasFactory;
    protected $table = 'bmt';
    protected $fillable = ['nama', 'alamat', 'direktur', 'tanggalberdiri', 'foto'];
}
