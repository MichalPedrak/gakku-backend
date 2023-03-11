<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function groups(){ // hasOne hasMany belongsTo blongsToMany
//        return $this->belongsToMany(Groups::class);
//    }


//    public function cardsStatus(){ // hasOne hasMany belongsTo blongsToMany
//        return $this->hasMany(Cards::class);
//    }
}
