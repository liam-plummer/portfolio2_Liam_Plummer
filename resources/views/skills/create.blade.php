@extends('templates.admin')

@section('administration')
<div class="container">
    <form action="{{ route("skill.store") }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Create skills</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Language</label>
          <input type="text" class="form-control" name="language" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Percentage</label>
          <input type="text" class="form-control" name="percentage">
        </div>   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
   
@endsection