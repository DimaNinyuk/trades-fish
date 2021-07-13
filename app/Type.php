<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name'
    ];
    public function trades(){
        return $this->hasMany(Trade::class);
    }
}
