<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'user_id',
        'comment',
        'rating'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function character(){
        return $this -> belongsTo(Character::class);
    }
    public function user(){
        return $this -> belongsTo(User::class);
    }
}
