<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kabupatenkota extends Model
{
    use HasFactory;
    protected $table = 'kabupatenkota';
    protected $fillable = ['kab'];
}
