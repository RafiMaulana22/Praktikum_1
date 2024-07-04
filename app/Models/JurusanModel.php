<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class, 'id_jurusan');
    }
}
