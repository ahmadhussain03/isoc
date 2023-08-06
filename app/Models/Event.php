<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
        'from_time' => 'datetime',
        'to_time' => 'datetime',
        'users.pivot.attended_at' => 'datetime'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('attended_at');
    }
}
