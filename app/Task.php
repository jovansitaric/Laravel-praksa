<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $tasks = 'students';

    protected $fillable = ['title', 'description'];

    public function hasUser() {
        {
            return $this->belongsTo('App\User', 'id');
        }
    }
}
