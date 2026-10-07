<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'status','date_fin','project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
