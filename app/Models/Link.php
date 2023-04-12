<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $guarded = [
        'created_at',
        'updated_at',
    ];


    public function bookmaker()
    {
        return $this->belongsTo('App\Models\Bookmaker');
    }
}
