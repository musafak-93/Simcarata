<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Masajabatan extends Model
{
    use HasFactory;
    protected $table = 'masajabatan';
    protected $fillable = ['tahun'];
}
