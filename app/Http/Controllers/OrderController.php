<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showlist()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('products')->get();
        
         
        return view('showlist', compact('products', 'categories'));
    }

    public function index()
    {
    
        $orders = Order::latest()->paginate(5);
    
        return view('orders.index',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    
        
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
        $request->validate([
            'orderdate' => 'required',
            
            
            
        ]);
    
        Order::create($request->all());
     
        return redirect()->route('orders.index')
                        ->with('success','orderdate created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    } 

    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'orderdate' => 'required',
            
        ]);
    
        $order->update($request->all());
    
        return redirect()->route('orders.index')
                        ->with('success','orderdate updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
  
     public function destroy(Order $order)
    {
        $order->delete();
    
        return redirect()->route('orders.index')
                        ->with('success','orderdate deleted successfully');
    }
}
