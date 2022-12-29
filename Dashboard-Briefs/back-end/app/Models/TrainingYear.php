<?php

namespace App\Models;
use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingYear extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Groupe::class);
    }
}
