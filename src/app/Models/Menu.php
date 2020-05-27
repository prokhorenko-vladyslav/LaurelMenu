<?php

namespace Laurel\Menu\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laurel\Menu\App\Traits\HasUserRelation;
use Spatie\Translatable\HasTranslations;

/**
 * Menu model
 *
 * Class Menu
 * @package Laurel\Menu\App\Models
 */
class Menu extends Model
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
     * Relationship to MenuItems
     *
     * @return HasMany
     */
    public function menuItems() : HasMany
    {
        return $this->hasMany(MenuItem::class);
    }

    /**
     * Returns menu using id
     *
     * @param int $id
     * @return static|null
     */
    public static function findById(int $id) : ?self
    {
        return self::find($id);
    }

    /**
     * Returns menu using slug
     *
     * @param string $slug
     * @return static|null
     */
    public static function findBySlug(string $slug) : ?self
    {
        return self::where('slug', $slug)->first();
    }
}
