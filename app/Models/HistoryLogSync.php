<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class HistoryLogSync extends Model
{
    use HasFactory;

    protected $table = 'history_log_syncs';

    protected $guarded = [];
}
