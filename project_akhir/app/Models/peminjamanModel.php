<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanModel extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $fillable = ["anggota_id", "buku_id"];

    // Model PeminjamanModel
    public function anggota()
    {
        return $this->belongsTo(AnggotaModel::class, 'anggota_id');
    }

    public function buku()
    {
        return $this->belongsTo(BukuModel::class, 'buku_id');
    }


}




