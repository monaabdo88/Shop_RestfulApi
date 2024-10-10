<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const AVAILABLE_PRODUCT = 'avalibale';
    const UNVAILABLE_PRODUCT = 'unavailable';
    protected $fillable = ['name','description','status','seller_id','quantity','image'];
    public function isAvailable()
    {
        return $this->status = Product::AVAILABLE_PRODUCT;
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
