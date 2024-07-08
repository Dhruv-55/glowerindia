<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_id','image'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public static function getPrimaryImage($product_id)
    {
        return self::where('product_id', $product_id)->first();
    }
}
