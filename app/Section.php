<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name', 'tema_id'
    ];

    public function tema() {
        return $this->belongsTo(Tema::class);
    }

    public function nota() {
        return $this->hasMany(Nota::class);
    }
}
