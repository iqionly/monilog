<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

/**
 * [Description LogActivities]
 */
class Log extends Model
{
    protected $connection = 'mongodb';
    protected $guarded = [];
    protected $fillable = [
        'log_mytalent_id',
        'user_id',
        'url_access',
        'data',
        'description',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
