<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table="contacts";
    protected $fillable = [
        'name',
        'email',
        'message',
        'created_at',
        'updated_at',
    ];

    public function scopeSelection($query)
    {
        return $query->select('id','name','email','message','created_at');
    }

}
