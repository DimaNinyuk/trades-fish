<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'name', 'description','start_price','status_id','type_id','seller_id'
    ];
    public function rates(){
        return $this->hasMany(Rate::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
