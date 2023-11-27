<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;
    protected $fillable = ['jurusan'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }

    public function rps()
    {
        return $this->hasMany(rpsItem::class);
    }
}
