<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'branch_id', 'name', 'code',
        'duration_estimate_minutes', 'is_priority', 'is_active',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function queues()
    {
        return $this->hasMany(Queue::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
