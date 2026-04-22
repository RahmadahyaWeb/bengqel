<?php

// app/Models/Queue.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = [
        'branch_id', 'service_id', 'customer_id', 'vehicle_id',
        'queue_number', 'queue_date', 'sequence',
        'status', 'source', 'is_priority',
        'mechanic_id', 'stall_id',
        'called_at', 'started_at', 'finished_at',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(User::class, 'mechanic_id');
    }

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function logs()
    {
        return $this->hasMany(QueueLog::class);
    }
}
