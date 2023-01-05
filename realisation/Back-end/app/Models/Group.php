<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
    public function assignedYear()
    {
        return $this->belongsTo(TrainingYear::class, 'trainingyear_id');
    }
}
