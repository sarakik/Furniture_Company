@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Images</div>

                <div class="card-body">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>#ID</th>
						        <th>Name</th>
						  
						        <th>Control</th>
						      </tr>
						    </thead>
						    <tbody>
						   @foreach($galleries as $gallery)
						      <tr>
						        <td>{{$gallery->id}}</td>
						        <td>{{$gallery->name}}</td>
						        
						        <td>
						        	<a href="/galleries/edit/{{$gallery->id}}" class="btn btn-success">Edit</a>
						        	<a href="/galleries/delete/{{$gallery->id}}" class="btn btn-danger">Delete</a>
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
