<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Keterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangan';
    protected $fillable = ['kondisi'];
}
