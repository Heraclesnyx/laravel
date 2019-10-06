<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','author','gender'];

    public function loan(){
    	
    	return $this->belongsTo('App\Loan');
    }
}
