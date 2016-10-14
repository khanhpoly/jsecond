<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    protected $fillable=[
    'name',
    'idcate',

    ];
    public function link(){
   	return \URL::to('category/'.$this->slug);
   }
   public function imagelink(){
   	   return \URL::to($this->images);
   }
}
