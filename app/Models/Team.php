<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function answers(){
        return $this->belongsToMany(Question::class, 'answers', 'team_id', 'question_id')->withPivot(['answer'])->withTimestamps();
    }
    public function logs(){
        return $this->belongsToMany(Ormawa::class, 'logs', 'team_id', 'ormawa_id')->withPivot(['description'])->withTimestamps();
    }
}
