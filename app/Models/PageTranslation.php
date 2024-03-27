<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['lang_id', 'page_id', 'title', 'content'];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'lang_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function toSearchableArray(): array
    {
        return $this->toArray();
    }
}
