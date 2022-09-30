<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table="staffs";
    protected $fillable=[
        'name',
        'job',
        'image',
        'added_by',
        'center_id',
        'created_at',
        'updated_at',
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','name','job','added_by','center_id','image');
    }
    public function center()
    {
        return $this->belongsTo(Center::class , 'center_id', 'id');
    }
}
