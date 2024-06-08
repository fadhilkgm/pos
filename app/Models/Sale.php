<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function invoice(){
        return $this->belongsTo('App\Models\Invoice');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }


}
