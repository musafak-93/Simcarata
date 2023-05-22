<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tipeanggota extends Model
{
    use HasFactory;
    protected $table = 'tipeanggota';
    protected $fillable = ['tipe_anggota'];
}
