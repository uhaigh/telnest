<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $filllable =['houtels_id','type','price','deskripsion','photo'];
    
    public function houtels()
    {
        return $this->belongsTo(Houtels::class, 'houtel_id','id');
    }
    public function order()
    {
        return $this->hasMany(Order::class,'room_id','id');
    }
}
