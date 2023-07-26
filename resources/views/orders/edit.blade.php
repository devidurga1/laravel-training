@extends('layouts.app')
   
@section('content')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>-->
              <!--<li class="breadcrumb-item active">Starter Page</li>-->
              <li class="breadcrumb-item"><a href="{{ route('orders.create') }}">Add New Orderdate</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Orderdate</h2>
            </div>
          <!--  <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>-->
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Orderdate:</strong>
                    <input type="date" name="orderdate" value="{{ $order->orderdate }}" class="form-control" placeholder="orderdate">
                </div>
            </div>

            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status</strong>
                    <input type="number" name="status" value="{{ $order->status }}" class="form-control" placeholder="status">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>delivery_address</strong>
                    <input type="text" name="delivery_address" value="{{ $order->delivery_address }}" class="form-control" placeholder="delivery_address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>phone_Number</strong>
                    <input type="number" name="phone_Number" value="{{ $order->phone_Number }}" class="form-control" placeholder="phone_Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>user_id</strong>
                    <input type="number" name="user_id" value="{{ $order->user_id }}" class="form-control" placeholder="user_id">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>total_amount</strong>
                    <input type="number" name="total_amount" value="{{ $order->total_amount }}" class="form-control" placeholder="total_amount">
                </div>
            </div>


            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection