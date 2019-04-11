<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linksnota extends Model
{
    protected $fillable = [
        'name', 'link', 'nota_id'
    ];
}
