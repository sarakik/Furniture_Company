@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Section</div>

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
						   @foreach($sections as $section)
						      <tr>
						        <td>{{$section->id}}</td>
						        <td>{{$section->name}}</td>
						        <td>
						        	<a href="/sections/edit/{{$section->id}}" class="btn btn-success">Edit</a>
						        	<a href="/sections/delete/{{$section->id}}" class="btn btn-danger">Delete</a>
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
