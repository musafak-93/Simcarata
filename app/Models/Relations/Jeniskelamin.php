<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeniskelamin extends Model
{
    use HasFactory;
    protected $table = 'jeniskelamin';
    protected $fillable = ['kelamin'];
}
