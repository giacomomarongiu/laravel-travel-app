<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Picture extends Model
{
    use HasFactory;

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Step::class);
    }
}
