@extends('templates.admin')

@section('administration')
<div class="container">
    <form action="/fact/{{ $fact->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("put")
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <h3 class="text-center my-5">Edit facts</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Number</label>
          <input type="text" class="form-control" name="number" value="{{ $fact->number }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" name="description" value="{{ $fact->description }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Icon</label>
          <input type="text" class="form-control" name="icon" value="{{ $fact->icon }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
   
@endsection