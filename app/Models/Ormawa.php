<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;

    public function logs(){
        return $this->belongsToMany(Team::class, 'logs', 'ormawa_id', 'team_id')->withPivot(['description'])->withTimestamps();
    }
}
