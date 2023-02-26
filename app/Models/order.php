<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class order extends Model
{
    use HasFactory;
    protected $fillable =['houtels_id','room_id','chack_in','chack_out','bank_id','bank_id','name','photo'];

    public function houtel()
    {
        return $this->belongsTo(Houtels ::class , 'houtel_id','id');
    }
    public function room()
    {
        return $this->belongsTo(Room::class ,'room_id','id');
    }
    public function bank()
    {
        return $this->hasMany(Bank::class,'bank_id','id');
    }
}
