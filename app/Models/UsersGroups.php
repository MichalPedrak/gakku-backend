<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersGroups extends Model
{
    use HasFactory;

    public function user(){ // hasOne hasMany belongsTo blongsToMany
        return $this->belongsTo(User::class);
    }

    public function group(){ // hasOne hasMany belongsTo blongsToMany
        return $this->belongsTo(Groups::class);
    }


}
