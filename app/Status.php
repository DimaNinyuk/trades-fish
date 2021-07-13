<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'name'
    ];
    public function trades(){
        return $this->hasMany(Trade::class);
    }
}
