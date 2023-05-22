<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Tipejabatan extends Model
{
    use HasFactory;
    protected $table = 'tipejabatan';
    protected $fillable = ['jabatan'];
}
