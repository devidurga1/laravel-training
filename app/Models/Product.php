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
        'prodname',
        'category_id',
        'order_id',
        'status',
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
