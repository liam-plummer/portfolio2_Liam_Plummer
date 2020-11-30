@extends('templates.admin')

@section('administration')
<div class="container">
    <form action="{{ route("portfolio.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
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
          <input type="file "name="image">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Category</label>
          <input type="text" class="form-control" name="category">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
      </form>
</div>
   
@endsection