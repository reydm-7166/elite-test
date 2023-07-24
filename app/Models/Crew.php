<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
    ];

    public function details(): HasMany
    {
        return $this->hasMany(Details::class);
    }
    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }


}
