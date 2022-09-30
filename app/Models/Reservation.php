<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table="reservations";
    protected $fillable = [
        'date',
        'time',
        'hours',
        'play_id',
        'user_id',
        'total_price',
        'created_at',
        'updated_at',
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','date','time','hours','total_price','play_id','user_id');
    }
    public function playgrounds()
    {
        return $this->belongsTo(Playground::class , 'play_id', 'id');
    }
}
