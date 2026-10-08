<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'slug', 'industry', 'title', 'description', 'image',
        'scope', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'scope' => 'array',
        'is_published' => 'boolean',
    ];

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
}
