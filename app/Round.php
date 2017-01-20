<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * The matches that belong to the round.
     */
    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}