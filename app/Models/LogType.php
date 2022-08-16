<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogType extends Model
{
    use HasFactory;

    const INFO = 1;
    const WARNING = 2;

    protected $table = 'log_types';

    protected $fillable = ['type'];

    public function logs()
    {
        return $this->hasMany(Log::class, 'log_type_id', 'id');
    }
}
