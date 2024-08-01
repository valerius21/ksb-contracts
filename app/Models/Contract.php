<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Parables\Cuid\GeneratesCuid;

class Contract extends Model
{
    use GeneratesCuid;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
