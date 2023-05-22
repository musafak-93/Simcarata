<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rantingmuhammadiyah extends Model
{
    use HasFactory;
    protected $table = 'rantingmuhammadiyah';
    protected $fillable = ['nama_ranting_muhammadiyah'];
}
