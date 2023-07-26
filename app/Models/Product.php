<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

  //  protected $fillable = [
       // 'name', 'detail'
   // ];
   
   use HasFactory;
    protected $fillable = [
        'id',
        'product_name',
        'category_id',
        'order_id',
        'status',
        'description',
        
    ];
  
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function order()
    {
        return $this->belongsTo(Order::class);
    }




}
