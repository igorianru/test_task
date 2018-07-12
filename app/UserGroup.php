<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
  /**
   * @var array
   */
  protected $fillable = [
    'name', 'group_id', 'user_id',
  ];

  public function groups()
  {
    return $this->belongsTo('App\Groups', 'group_id');
  }
}
