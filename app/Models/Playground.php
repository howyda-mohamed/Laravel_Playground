<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playground extends Model
{
    use HasFactory;
    protected $table="playgrounds";
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'center_id',
        'added_by',
        'active',
        'created_at',
        'updated_at',
    ];
    public function scopeActive($query)
    {
        return $query->where('active','1');
    }
    public function getActive()
    {
        return $this->active ==  1 ?'active' :'in active';
    }
    public function scopeSelection($query)
    {
        return $query->select('id','title','description','center_id','price','image','active');
    }
    public function getImageAttribute($val)
    {
        return($val !== NULL) ? asset($val) : "";
    }
    public function center()
    {
        return $this->belongsTo(Center::class , 'center_id', 'id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
