<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rantingaisyiyah extends Model
{
    use HasFactory;
    protected $table = 'rantingaisyiyah';
    protected $fillable = ['nama_ranting_aisyiyah'];
}
