

  <div class="mb-5 text-center">
    <h1>Users</h1>
    <hr class="w-50">
    <a class="btn btn-primary" href="{{ route("user.create") }}">Create</a>
  </div>
<table class="table w-75 mx-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Birthday</th>
      <th scope="col">Website</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Age</th>
      <th scope="col">Degree</th>
      <th scope="col">Email</th>
      <th scope="col">Freelance</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->birthday}}</td>
            <td>{{$e->webiste}}</td>
            <td>{{$e->phone}}</td>
            <td>{{$e->city}}</td>
            <td>{{$e->age}}</td>
            <td>{{$e->degree}}</td>
            <td>{{$e->email}}</td>
            <td>{{$e->freelance}}</td>
            <td><img src="{{asset($e->image)}}" alt="" height="50px" width="50px"></td>
            <td class="d-flex">
                <a class="btn btn-success" href="/user/{{ $e->id }}/edit">edit</a>
                <form action="/user/{{ $e->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger ml-2"  type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
