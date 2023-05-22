<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aset extends Model
{
    use HasFactory;
    protected $table = 'aset';
    protected $fillable = ['tipe_aset', 'muwakif', 'jumlah', 'unit', 'alamat', 'deskripsi', 'foto', 'dokumen_aset'];
}
