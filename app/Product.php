<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Projects()
    {
        return $this->belongsTo(Project::Class);
    }
    public function Category()
    {
        return $this->belongsTo(Category::Class);
    }
}
