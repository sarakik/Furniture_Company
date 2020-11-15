@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Item</div>

                <div class="card-body">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>#ID</th>
						        <th>Name</th>
						        <th>Price</th>
						        <th>Control</th>
						      </tr>
						    </thead>
						    <tbody>
						   @foreach($items as $item)
						      <tr>
						        <td>{{$item->id}}</td>
						        <td>{{$item->name}}</td>
						        <td>{{$item->price}}</td>
						        <td>
						        	<a href="/items/edit/{{$item->id}}" class="btn btn-success">Edit</a>
						        	<a href="/items/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
						        </td>
						      </tr>
						   @endforeach
						      
						    </tbody>
						  </table>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
