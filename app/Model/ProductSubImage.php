<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductSubImage extends Model
{
    public function color(){
        return $this->belongsTo(ProductSubImage::class,'color_id','id');
    }
}
