<?php

namespace App\Models;
use App\Models\TrainingYear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    public function trainingYears(){
        return $this->belongsTo(TrainingYear::class);
    }
}
