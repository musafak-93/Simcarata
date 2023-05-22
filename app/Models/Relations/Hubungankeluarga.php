<?php

namespace App\Models\Relations;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Hubungankeluarga extends Model
{
    use HasFactory;
    protected $table = 'hubungankeluarga';
    protected $fillable = ['hubungan'];
}
