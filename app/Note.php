<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "notes";

    protected $fillable = ['title', 'description', 'task_id'];

    public function task() {
       return $this->hasOne('App\Task');
    }

}
