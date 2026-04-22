<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueueLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'queue_id', 'status_from', 'status_to', 'changed_by', 'created_at',
    ];

    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
