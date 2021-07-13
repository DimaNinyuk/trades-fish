<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'date', 'price','trade_id','client_id'
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function trade(){
        return $this->belongsTo(Trade::class);
    }
}
