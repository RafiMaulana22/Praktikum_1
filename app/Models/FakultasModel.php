<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakultasModel extends Model
{
    use HasFactory;

    protected $table = 'fakultas';
    protected $guarded = [];
}
