<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $guarded = [];

    public function jurusan()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan');
    }
}
