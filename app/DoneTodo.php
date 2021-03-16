<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoneTodo extends Model
{
    protected $guarded = array ('id');
    
    //
    public static $rules = array (
      'todo' => 'required',
    );
    
}
