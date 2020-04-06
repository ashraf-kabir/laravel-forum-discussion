<?php

namespace App;
use App\User;
use App\Reply;

use App\Notifications\ReplyMarkedAsBestReply;

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

    public function bestReply() {
        return $this->belongsTo(Reply::class, 'reply_id');
    }

    public function markAsBestReply(Reply $reply) {
        $this->update([
            'reply_id' => $reply->id
        ]);

        $reply->owner->notify(new ReplyMarkedAsBestReply($reply->discussion));
    }
}
