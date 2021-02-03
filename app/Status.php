<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = true;
    protected $table = 'user_status';
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(StatusComments::class);
    }
}
