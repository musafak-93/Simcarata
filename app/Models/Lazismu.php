<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Lazismu extends Model
{
    use HasFactory;
    protected $table = 'lazismu';
    protected $fillable = ['nama', 'alamat'];
}
