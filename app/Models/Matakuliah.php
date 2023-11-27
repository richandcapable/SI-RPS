<?php

namespace App\Models;

use App\Models\rpsItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'matakuliah', 'sks'];

    public function rps()
    {
        return $this->hasMany(rpsItem::class);
    }
}
