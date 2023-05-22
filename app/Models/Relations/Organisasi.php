<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Organisasi extends Model
{
    use HasFactory;
    protected $table = 'organisasi';
    protected $fillable = ['nama'];
}
