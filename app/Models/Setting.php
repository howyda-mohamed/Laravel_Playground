<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table="settings";
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'location',
        'phone',
        'email',
        'added_by',
        'created_at',
        'updated_at',
    ];

    public function scopeSelection($query)
    {
        return $query->select('id','title','sub_title','description','phone','email','location');
    }
}
