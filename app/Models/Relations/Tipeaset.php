<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tipeaset extends Model
{
    use HasFactory;
    protected $table = 'tipeaset';
    protected $fillable = ['tipe_aset'];
}
