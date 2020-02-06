<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model{
  public $timestamps = false;
  protected $primary_key = 'emp_no';
  
  public function employees(){
    return $this->belongsToMany('App\Employee', 'emp_no', 'emp_no');
  }
}
