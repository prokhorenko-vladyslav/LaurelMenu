<?php


namespace Laurel\Menu\App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use \Laurel\MultiRoute\App\Models\Path as Model;

/**
 * Overriding of path model
 *
 * Class Path
 * @package Laurel\Menu\App\Models
 */
class Path extends Model
{
    /**
     * Relation to MenuItems
     *
     * @return HasMany
     */
    public function menuItems(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}
