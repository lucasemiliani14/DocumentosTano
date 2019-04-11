<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'name', 'section_id'
    ];

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
