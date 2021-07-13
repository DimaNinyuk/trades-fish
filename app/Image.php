<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'img', 'trade_id'
    ];
    public function trade(){
        return $this->belongsTo(Trade::class);
    }
}
