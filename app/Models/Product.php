<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const ACTIVE = 1 , INACTIVE =2;

    protected $fillable = [
        'category_id','brand_id','name','slug','short_description','description','original_price','selling_price','quantity','trending','status'
    ];

    public function scopeActive($q){
      return $q->where('status',self::ACTIVE);
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function images(){
      return $this->hasMany(ProductImage::class);
    }
}
