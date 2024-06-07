<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    use HasFactory;
    protected $table        = "anggota";
    protected $primaryKey   = "id";
    protected $fillable     = ['id','nim','nama_anggota','prodi','hp'];
}
