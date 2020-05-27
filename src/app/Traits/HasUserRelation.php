<?php

namespace Laurel\Menu\App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Trait for creating relationship to user
 *
 * Trait HasUserRelation
 * @package Laurel\Menu\App\Traits
 */
trait HasUserRelation
{
    /**
     * Relationship to user
     *
     * @return BelongsTo|null
     */
    public function user() : ?BelongsTo
    {
        if (config('menu.attach_user')) {
            return $this->belongsTo(config('menu.user_model'));
        } else {
            return null;
        }
    }
}
