<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'documents', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function trades(){
        return $this->hasMany(Trade::class);
    }
}
