@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Option 'color'</div>

                <div class="card-body">
						  <table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>#ID</th>
						        <th>Colors</th>
						        <th>Control</th>
						      </tr>
						    </thead>
						    <tbody>
						   @foreach($options as $option)
						      <tr>
						        <td>{{$option->id}}</td>
						        <td>{{$option->name}}</td>
						        <td>
						        	<a href="/options/edit/{{$option->id}}" class="btn btn-success">Edit</a>
						        	<a href="/options/delete/{{$option->id}}" class="btn btn-danger">Delete</a>
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
