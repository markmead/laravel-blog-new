<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /*
  |--------------------------------------------------------------------------
  | Override Database Table
  |--------------------------------------------------------------------------
  |
  | protected $table = 'blog';
  | public $primaryKey = 'title'; 
  | public $timestamps = false
  |
  */

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
