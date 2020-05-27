<?php

namespace Laurel\Menu\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laurel\Menu\App\Traits\HasUserRelation;
use Laurel\MultiRoute\App\Models\Path;
use Spatie\Translatable\HasTranslations;

/**
 * Model of menu item
 *
 * Class MenuItem
 * @package Laurel\Menu\App\Models
 */
class MenuItem extends Model
{
    use HasTranslations;
    use HasUserRelation;

    /**
     * Translatable properties
     *
     * @var string[]
     */
    protected $translatable = ["name"];

    /**
     * Fillable properties
     *
     * @var string[]
     */
    protected $fillable = ["name", "slug", "attributes"];

    /**
     * Cast properties
     *
     * @var string[]
     */
    protected $casts = [
        "attributes" => "array"
    ];

    /**
     * Relationship to Menu
     *
     * @return BelongsTo
     */
    public function menu() : BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * @return BelongsTo
     */
    public function path() : BelongsTo
    {
        return $this->belongsTo(Path::class);
    }
}
