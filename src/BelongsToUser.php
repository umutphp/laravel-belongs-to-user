<?php

namespace UmutPHP\BelongsToUser;

trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
