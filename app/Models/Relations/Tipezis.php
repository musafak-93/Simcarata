<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tipezis extends Model
{
    use HasFactory;
    protected $table = 'tipezis';
    protected $fillable = ['zis'];
}
