<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name', 'code', 'address', 'phone',
        'operational_start', 'operational_end', 'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_branch');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function stalls()
    {
        return $this->hasMany(Stall::class);
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
