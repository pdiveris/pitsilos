<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta',
        'options',
        'published_at',
        'enabled',
        'user_id',
    ];

    protected $appends = [
        'page_translations',
    ];

    public function translations(): HasMany
    {
        return $this->hasMany(
            PageTranslation::class
        );
    }

    public function getPageTranslationsAttribute(): array
    {
        $ret = [];
        foreach ($this->translations->all() as $id => $translation) {
            $ret[$translation->lang_id] = [
                'title' => $translation->name,
                'content' => $translation->description,
            ];
        }
        return $ret;
    }

    public function translate($langId)
    {
        return $this->translations
            ->where('lang_id', $langId)
            ->first();
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed  $value
     * @param  string|null  $field
     * @return Model|null
     */
    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where('slug', $value)
            ->where('enabled', '=', true)
            ->firstOrFail();
    }
}
