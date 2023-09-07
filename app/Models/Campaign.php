<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Campaign extends Model
{
    use HasFactory;

    public const STATUSES = [
        'active',
        'paused',
        'inactive',
    ];

    public const TYPES = [
        'regular',
        'rvm',
    ];

    public $timestamps = false;

    protected $fillable = [
        'name',
        'order',
        'type',
        'status',
        'start_date',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', 'active');
    }
}
