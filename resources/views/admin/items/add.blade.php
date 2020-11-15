@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item</div>

                <div class="card-body">
                   <form action="{{route('store_item')}}" method="POST">
                    @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="Text" class="form-control" placeholder="Enter name" id="name" name="name">
              </div>
               <div class="form-group" >
                <label for="discription">Description:</label>
                <textarea class="form-control" name="description">
                </textarea>
               </div>
               <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" placeholder="Enter Price" id="price" name="price">
                </div>
                <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="number" class="form-control" placeholder="Enter discount" id="discount" name="discount">
                </div>
                <div class="form-group">
                <label for="availlable">Available:</label>
                <select class="form-control" name="ia_available">
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
              <div class="form-group">
                <label for="section_id">Section:</label>
                <select class="form-control" name="section_id">
                  @foreach($sections as $section)
                    <option value="{{$section->id}}">
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
