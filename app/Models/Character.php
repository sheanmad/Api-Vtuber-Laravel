<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'affiliation_id',
        'name',
        'description',
        'avatar_url',
        'debut'
    ];
    protected $casts = [
        'debut'=>'datetime',
        'created_at'=>'datetime',
        'updated_at'=>'datetime'
    ];
    public function affiliation()
    {
        return $this -> belongsTo(Affiliation::class);
    }
    public function comments()
    {
        return $this -> hasMany(Comment::class);
    }
    public function favoritedByUsers()
    {
        return $this -> belongsToMany(User::class, 'favorites')->withTimestamps();
    }
}
