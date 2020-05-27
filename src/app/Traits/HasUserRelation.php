<?php

namespace Laurel\Menu\App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasUserRelation
{
    public function user() : ?BelongsTo
    {
        if (config('menu.attach_user')) {
            return $this->belongsTo(config('menu.user_model'));
        } else {
            return null;
        }
    }
}
