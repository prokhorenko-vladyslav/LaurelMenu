<?php

namespace Laurel\Menu\App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laurel\Menu\App\Traits\HasUserRelation;
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
     * By default adds children to every menu item
     *
     * @var string[]
     */
    protected $with = [
        "children"
    ];

    /**
     * Relationship to Menu
     *
     * @return BelongsTo
     */
    public function menu() : BelongsTo
    {
        return $this->belongsTo(config('menu.menu_model'));
    }

    /**
     * Relationship to Path
     *
     * @return BelongsTo
     */
    public function path() : BelongsTo
    {
        return $this->belongsTo(config('multi-route.path_model'));
    }

    /**
     * Relationship child-parent
     *
     * @return BelongsTo
     */
    public function parent() : BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Relationship child-parent
     *
     * @return HasMany
     */
    public function children() : HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * Returns menu item using id
     *
     * @param int $id
     * @return static|null
     */
    public static function findById(int $id) : ?self
    {
        return self::find($id);
    }

    /**
     * Returns menu item using slug
     *
     * @param string $slug
     * @return static|null
     */
    public static function findBySlug(string $slug) : ?self
    {
        return self::where('slug', $slug)->first();
    }

    /**
     * Overriding of base delete model.
     * Now, method is deleting all children too
     *
     * @return bool|null
     * @throws Exception
     */
    public function delete()
    {
        $this->children()->delete();
        return parent::delete();
    }
}
