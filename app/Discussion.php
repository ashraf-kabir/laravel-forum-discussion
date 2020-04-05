<?php

namespace App;
use App\User;
use App\Reply;

class Discussion extends Model
{
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
