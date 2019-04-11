<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = [
        'name'
    ];

    public function section() {
        return $this->hasMany(Section::class);
    }
}
