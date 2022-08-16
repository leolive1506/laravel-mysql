<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs';
    protected $fillable = ['log_type_id', 'body', 'breadcrumb'];

    public function logType()
    {
        return $this->belongsTo(LogType::class, 'log_type_id', 'id');
    }
}
