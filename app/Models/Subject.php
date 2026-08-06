<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //SUBJECT MODEL
    protected $fillable = ['name','color','icon_path'];//,'user_id' savoir si a rajouter ou pas

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
