<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name',   ];

    public function sub_category(){
        return $this->hasMany(sub_category::class);
    }
}