<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class Order extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'id',
        'orderdate',
        'status',
        'phone_number',
        'delivery_address',
        'user_id',
        'total_amount',

        

    ];
  
    public function products()
    {
        return $this->hasMany(Product::class, 'order_id', 'id');
    }
    

   

}
