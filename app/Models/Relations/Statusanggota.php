<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Statusanggota extends Model
{
    use HasFactory;
    protected $table = 'statusanggota';
    protected $fillable = ['status'];
}
