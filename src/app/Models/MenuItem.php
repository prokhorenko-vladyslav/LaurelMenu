<?php

namespace Laurel\Menu\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laurel\Menu\App\Traits\HasUserRelation;
use Laurel\MultiRoute\App\Models\Path;
use Spatie\Translatable\HasTranslations;

class MenuItem extends Model
{
    use HasTranslations;
    use HasUserRelation;

    protected $translatable = ["name"];
    protected $fillable = ["name", "attributes"];
    protected $casts = [
        "attributes" => "array"
    ];

    public function menu() : BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function path() : BelongsTo
    {
        return $this->belongsTo(Path::class);
    }
}
