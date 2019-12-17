<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
     //this belongs to user
    public function user(){
      return $this->belongsTo('App\User');
    }
}
