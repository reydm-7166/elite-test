<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'crew_id',
        'code',
        'name',
        'number',
        'date_issued',
        'date_expiry',
        'remarks',
        'created_at',
        'updated_at',
    ];

    public function crews() : BelongsTo
    {
        return $this->belongsTo(Crew::class);
    }
}
