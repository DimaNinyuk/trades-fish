<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'address', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rates(){
        return $this->hasMany(Rate::class);
    }
}
