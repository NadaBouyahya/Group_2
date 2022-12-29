<?php

namespace App\Models;
use App\Models\Apprentice; 
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;

    public function apprentice(){
        return $this->belonsTo(Apprentice::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }
}
