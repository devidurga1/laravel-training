@extends('layouts.app')
 
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         <!--   <h1 class="m-0">Starter Page</h1>-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>-->
              <!--<li class="breadcrumb-item active">Starter Page</li>-->
              <li class="breadcrumb-item"><a href="{{ route('categories.create') }}">Add New Category</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel-project</h2>
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
            
            <th>catname</th>
            <th>status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->catname }}</td>
            <td>{{ $category->status }}</td>
            
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $categories->links() !!}

      

    
@endsection