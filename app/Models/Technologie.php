<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    protected $fillable = ['nome', 'slug'];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
