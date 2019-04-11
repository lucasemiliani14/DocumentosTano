<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linkssection extends Model
{
    protected $fillable = [
        'name', 'link', 'section_id'
    ];
}
