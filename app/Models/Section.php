<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name','subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function notions()
    {
        return $this->hasMany(Notion::class);
    }
}
