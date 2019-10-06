<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['id_book','id_customer'];

    public function books(){

    	return $this->hasMany('App\Book','id','id_book'); //mettre belongsTo

    }

    public function customers(){

      return $this->hasMany('App\Customer','id','id_customer'); //mettre belongsTo et modifier vu de LOANS pour BOOK et CUSTOMERS
    }

	

}
