<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function ormawa(){
        return $this->belongsTo(Ormawa::class, 'ormawa_id');
    }
    public function answers(){
        return $this->belongsToMany(Team::class, 'answers', 'question_id', 'team_id')->withPivot(['answer'])->withTimestamps();
    }
}
