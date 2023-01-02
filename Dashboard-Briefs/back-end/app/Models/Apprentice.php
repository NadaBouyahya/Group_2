<?php

namespace App\Models;
use App\Models\Task;
use App\Models\Brief;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    public function task(){
        return $this->hasMany(Task::class);
    }

    public function brief(){
            return $this->hasMany(Brief::class);
    }
}


