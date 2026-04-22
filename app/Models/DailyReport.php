<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    protected $fillable = [
        'branch_id', 'report_date',
        'total_queue', 'avg_waiting_time', 'avg_service_time',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
