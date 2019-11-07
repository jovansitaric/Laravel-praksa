<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['title', 'description', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }    

    public function notes() {
        return $this.hasMany('App\Note');
    }

}
