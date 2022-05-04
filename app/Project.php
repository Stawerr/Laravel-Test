<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function Products()
    {
        return $this->hasMany(Product::Class);
    }
}
