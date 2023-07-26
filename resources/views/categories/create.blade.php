@extends('layouts.app')
  
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <!--  <h1 class="m-0">Starter Page</h1>-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <!--  <li class="breadcrumb-item"><a href="#">Home</a></li>-->
             <!-- <li class="breadcrumb-item active">Starter Page</li>-->
              <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Back</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <!--<h2>Add New Category</h2>-->
        </div>
       <!-- <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
   
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>CategoryName:</strong>
                <input type="text" name="category_name" class="form-control" placeholder="Category_Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>


        <!--<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                      <select class="form-control"  name="id">
                        <option value="">Select  Status</option>

                        @foreach ($categories as $category)
                         <option value="">{{ $category->status }}</option>
                        @endforeach
                      </select>
                    </div>
        </div>-->
             

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>description</strong>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
        </div>

       <!-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>category_id:</strong>
                <input type="number" name="category_id" class="form-control" placeholder="ProName">
            </div>
        </div>-->
        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection