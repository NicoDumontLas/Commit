<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notion extends Model
{
    protected $fillable = ['name','note','ressource','status','section_id'];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
