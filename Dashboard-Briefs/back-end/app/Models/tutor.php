<?php

namespace App\Models;
use App\Models\Brief;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    use HasFactory;

    public function brief(){
        return $this->hasMany(Brief::class);
    }
}
