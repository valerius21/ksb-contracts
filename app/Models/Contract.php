<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Parables\Cuid\GeneratesCuid;

class Contract extends Model
{
    use GeneratesCuid;

    protected $guarded = [];

    protected $casts = [
        'root_file' => 'array',
        'attachments' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setRootFileAttribute($value)
    {
        $this->attributes['root_file'] = json_encode($value);
    }

    public function getRootFileAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setAttachmentsAttribute($value)
    {
        $this->attributes['attachments'] = json_encode($value);
    }

    public function getAttachmentsAttribute($value)
    {
        return json_decode($value, true);
    }
}
