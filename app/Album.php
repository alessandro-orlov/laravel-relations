<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
      'title',
      'artist',
      'year',
    ];

    public function songs() {
      return $this->hasMany('App\Song');
    }

    public function poster() {
      return $this->hasOne('App\Poster');
    }
}
