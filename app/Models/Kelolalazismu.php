<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Kelolalazismu extends Model
{
    use HasFactory;
    protected $table = 'kelolalazismu';
    protected $fillable = ['donatur', 'tipezis', 'nominal', 'tanggalmasuk', 'pengurus'];
}
