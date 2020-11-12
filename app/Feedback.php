<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['userID','feedback1','feedback2','feedback3','feedback'];

    public function user(){

        return $this->belongsTo('App\User');

    }
}
