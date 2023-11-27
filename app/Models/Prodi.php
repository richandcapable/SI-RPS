<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prodi extends Model
{
    use HasFactory;
    protected $fillable = ['jurusan_id', 'prodi'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function rps()
    {
        return $this->hasMany(rpsItem::class);
    }
}
