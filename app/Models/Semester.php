<?php

namespace App\Models;

use App\Models\rpsItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Semester extends Model
{
    use HasFactory;
    protected $fillable = ['semester'];

    public function rps()
    {
        return $this->hasMany(rpsItem::class);
    }
}
