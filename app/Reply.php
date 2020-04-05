<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Discussion;

class Reply extends Model
{
    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function discussion() {
        return $this->belongsTo(Discussion::class);
    }
}
