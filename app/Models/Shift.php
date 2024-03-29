<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'date',
        'start_time',
        'end_time'
    ];

    /**
     * User relationship
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
