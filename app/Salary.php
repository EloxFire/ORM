<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model{
  protected $primary_key = "emp_no";
  public $timestamps = false;

  public function employees(){
    return $this->belongsTo('App\Employee', 'emp_no');
  }
}
