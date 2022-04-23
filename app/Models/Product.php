<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','produk_name', 'price', 'stock'];

    public function  category(){
        return $this->belongsTo('App\Models\Category');
    }
}
