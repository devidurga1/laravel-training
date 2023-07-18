@extends('layout')
 
@section('content')
<div class="row" style="margin:20px;">
    <div class="col-12">
    <h2>Laravel Join Two Tables</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
        
            <th scope="col">Product name</th>
            <th scope="col">Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                
                <td>{{ $product->prodname }}</td>
                <td>{{ $product->category->catname }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>    