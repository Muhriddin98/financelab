<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'slug', 'type', 'category', 'title', 'published_at',
        'image', 'intro', 'body', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'published_at' => 'date',
        'body' => 'array',
        'is_published' => 'boolean',
    ];

    public function isMedia(): bool
    {
        return $this->type === 'media';
    }

    /** Bosh / bilan normalangan rasm URL. */
    protected function imageUrl(): Attribute
    {
        return Attribute::get(function () {
            if (! $this->image) {
                return null;
            }

            return str_starts_with($this->image, '/') ? $this->image : '/'.$this->image;
        });
    }

    /** View dagi $article['date'] shu yerdan keladi (12 Sep 2026). */
    protected function date(): Attribute
    {
        return Attribute::get(fn () => $this->published_at?->format('j M Y'));
    }

    protected function href(): Attribute
    {
        // RU/UZ da til prefiksi (DB dagi slug o'zgarmaydi).
        return Attribute::get(fn () => (app()->getLocale() === 'en' ? '' : '/'.app()->getLocale()).'/'.($this->isMedia() ? 'media' : 'insights').'/'.$this->slug.'/');
    }
}
