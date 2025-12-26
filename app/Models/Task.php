<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'tasks';
    protected $guarded = false;

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
