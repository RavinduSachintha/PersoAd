<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertisements extends Model
{
    protected $fillable = [
        'title','category','flag','body','photo'
    ];
}
