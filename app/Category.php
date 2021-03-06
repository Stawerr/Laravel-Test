<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Products()
    {
        return $this->belongsTo(Product::Class);
    }
}
