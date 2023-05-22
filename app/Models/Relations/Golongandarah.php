<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongandarah extends Model
{
    use HasFactory;
    protected $table = 'golongandarah';
    protected $fillable = ['darah'];
}
