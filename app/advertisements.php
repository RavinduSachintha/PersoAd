<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertisements extends Model
{
    protected $fillable = [
        'user_id','title','category','flag','body','photo','paid'
    ];
}
