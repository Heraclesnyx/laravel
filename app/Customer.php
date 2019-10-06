<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','firstname','adress','phone', 'email'];

    public function loan(){

    	return $this->belongsTo('App\Loan');
    }
}
