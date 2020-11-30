@extends('templates.admin')

@section('administration')
<div class="container">
    <form action="/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit portfolios</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Image</label>
          <input type="file" name="image" value="{{ $portfolio->image }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <input type="text" class="form-control" name="category" value="{{ $portfolio->category }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
   
@endsection