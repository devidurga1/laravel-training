<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_name',
        'status',
        'description',

    ];
  
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    

   
  
    
}
