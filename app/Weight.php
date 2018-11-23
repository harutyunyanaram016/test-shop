<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Weight extends Model
{
    protected $fillable = [


        'price',
        'weight',
        'product_id'


    ];
    public function product(){
        return $this->belongsTo( Product::class);
    }
}
