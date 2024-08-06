<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Step extends Model
{
    use HasFactory;


    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }
}
