<?php

namespace App\Models;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rpsItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_rps';
    protected $fillable = ['jurusan_id', 'prodi_id', 'semester_id', 'matakuliah_id', 'dosen_id','deskripsi', 'file', 'keterangan'];


    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    
}
