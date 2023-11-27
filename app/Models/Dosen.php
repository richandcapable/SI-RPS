<?php

namespace App\Models;

use App\Models\rpsItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nip'];

    public function rps()
    {
        return $this->hasMany(rpsItem::class);
    }
}
