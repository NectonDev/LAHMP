<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'name', 'year'
    ];

    /**
     * The rounds that belong to the season.
     */
    public function rounds()
    {
        return $this->hasMany('App\Round');
    }

    /**
     * The teams that belong to the season.
     */
    public function teams()
    {
        return $this->hasMany('App\Team')->orderBy('points','desc');
    }
}
