@extends('layouts.app')
 
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <!-- <h1 class="m-0">Starter Page</h1>-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
             <!-- <li class="breadcrumb-item active">Starter Page</li>-->
              <li class="breadcrumb-item"><a href="{{ route('orders.create') }}">Add New Order</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel-Project</h2>
            </div>
          <!--  <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Add New Product</a>
            
            </div>-->
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            
            <th>orderdate</th>
            <td>status</td>
            <td>phone_Number</td>
            <td>delivery_address</td>
            <td>user_id</td>
            <td>total_amount</td>
            

            
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
        

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->orderdate }}</td>
            <td>{{ $order->status }}</td>
            <td>{{ $order->phone_Number}}</td>
            <td>{{ $order->delivery_address }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->total_amount }}</td>


            
            
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $orders->links() !!}

      

    
@endsection