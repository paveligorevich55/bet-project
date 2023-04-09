<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmaker extends Model
{
    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function link()
    {
        return $this->hasMany('App\Models\Link');
    }

}
