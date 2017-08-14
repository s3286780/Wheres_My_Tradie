<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    //table name
    protected $table = 'advertisements';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
