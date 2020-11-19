@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Item</div>

                <div class="card-body">
                   <form action="" method="POST">
                   	@csrf
			  <div class="form-group">
			    <label for="name">Name:</label>
			    <input type="Text" class="form-control" placeholder="Enter name" id="name" name="name" value="{{$item->name}}">
			  </div>
			  
			  <div class="form-group" >
                <label for="discription">Description:</label>
                <textarea class="form-control" name="description" value="{{$item->description}}">
                </textarea>
               </div>
               <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" placeholder="Enter Price" id="price" name="price" value="{{$item->price}}">
                </div>
                <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="number" class="form-control" placeholder="Enter discount" id="discount" name="discount" value="{{$item->discount}}">
                </div>
                <div class="form-group">
                <label for="availlable">Available:</label>
                <select class="form-control" name="is_available" >
                  <option value="1"> yes </option>
                  <option value="0"> no </option>
                </select>
                </div>
                <div class="form-group">
                <label for="size">Size:</label>
                <select class="form-control" name="size">
                  <option value="SM"> Small </option>
                  <option value="MD"> Medium </option>
                  <option value="LG"> Large </option>
                </select>
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
