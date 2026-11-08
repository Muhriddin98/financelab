<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'industry', 'locale', 'title', 'initiator', 'capex',
        'scope', 'is_published',
    ];

    protected $casts = ['is_published' => 'boolean'];
}
