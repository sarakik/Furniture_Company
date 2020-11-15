@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Option'color'</div>

                <div class="card-body">
                   <form action="" method="POST">
                   	@csrf
			  <div class="form-group">
			    <label for="name">Color:</label>
			    <input type="Text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$option->name}}">
			  </div>
			  
			  
			  <button type="submit" class="btn btn-primary">Submit
			  </button>
			</form>
	                </div>
            </div>
        </div>
    </div>
</div>
@endsection
