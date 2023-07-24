<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Details extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'crew_id',
        'education',
        'address',
        'contact_number',
    ];

    public function crew() : BelongsTo
    {
        return $this->belongsTo(Crew::class);
    }
}
