<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuModel extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $fillable = ["namabuku", "judul", "kategory"];
}
