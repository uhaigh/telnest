<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    // protectid $table ='cities'; // dillakukan juka nama midel dan table berbeda

    protected $filltable = ['nama','photo'];//filltable adalah kolom table yang boleh di isi
    protected $guarded = ['nama','photo']; //guarded adalah kolom table yang tidak boleh di isi

    public function houtel()
    {
        return $this->hasMany(  Houtels::class , 'cities_id','id');
    }

}
