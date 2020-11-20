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
        <div class="form-group">
                <label for="option_id">Color:</label>
                <select class="form-control" name="option_id">
                  @foreach($options as $option)
                    <option value="{{$option->id}}"
                   @if($item->option_id = $option->id)
                   {{"selected"}}
                   @endif
                      >
                      {{$option->name}}
                    </option>
                    @endforeach
                </select>
              </div>
        <div class="form-group">
          <label for="name">Image:</label>
          <input type="file" class="form-control"  id="image" name="image" value="{{$item->name}}">
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
                  <option value="1"
                   @if($item->is_available = 1)
                   {{"selected"}}
                   @endif
                  > YES </option>
                  <option value="0"
                   @if($item->is_available = 0)
                   {{"selected"}}
                   @endif
                  > NO </option>
                </select>
                </div>
                <div class="form-group">
                <label for="size">Size:</label>
                <select class="form-control" name="size">
                  <option value="SM"
                   @if($item->size = 'SM')
                   {{"selected"}}
                   @endif
                  > Small </option>
                  <option value="MD"
                   @if($item->size = 'MD')
                   {{"selected"}}
                   @endif
                  > Medium </option>
                  <option value="LG"
                   @if($item->size = 'LG')
                   {{"selected"}}
                   @endif
                  > Large </option>
                </select>
                </div>
                <div class="form-group">
                <label for="section_id">Section:</label>
                <select class="form-control" name="section_id">
                  @foreach($sections as $section)
                    <option value="{{$section->id}}"
                   @if($item->section_id = $section->id)
                   {{"selected"}}
                   @endif
                      >
                      {{$section->name}}
                    </option>
                    @endforeach
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
