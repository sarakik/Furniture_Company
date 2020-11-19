@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Image</div>

                <div class="card-body">
                   <form action="{{route('store_gallery')}}" method="POST" enctype="multipart/form-data">
                    @csrf
              <div class="form-group">
                <label for="name">Image:</label>
                <input type="file" class="form-control" id="name" name="name">
              </div>
               
               <div class="form-group">
                <label for="item_id">Item:</label>
                <select class="form-control" name="item_id">
                  @foreach($items as $item)
                    <option value="{{$item->id}}">
                      {{$item->name}}
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
