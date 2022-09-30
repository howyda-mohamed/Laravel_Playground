<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table="centers";
    protected $fillable = [
        'title',
        'location',
        'image',
        'phone',
        'play_number',
        'added_by',
        'created_at',
        'updated_at',
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','title','location','image','phone','play_number');
    }

    public function playgrounds()
    {
        return $this->hasMany(Playground::class);
    }
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'added_by','id');
    }
}
