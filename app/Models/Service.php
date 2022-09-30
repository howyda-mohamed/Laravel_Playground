<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table="services";
    protected $fillable = [
        'id',
        'title',
        'description',
        'added_by',
        'created_at',
        'updated_at',
    ];
    public function scopeSelection($query)
    {
        return $query->select('id','title','description','added_by');
    }
}
