<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    //spp
    protected $table = "spp";
    protected $fillable = ['id', 'tahun', 'nominal'];
}
