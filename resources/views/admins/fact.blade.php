<div class="mb-5 text-center">
    <h1>Facts</h1>
    <hr class="w-50">
    <a class="btn btn-primary" href="{{ route("fact.create") }}">Create</a>
</div>
<table class="table w-75 mx-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">Description</th>
      <th scope="col">Icon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($facts as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->number}}</td>
            <td>{{$e->description}}</td>
            <td><i class="{{$e->icon}}"></i></td>
            <td class="d-flex">
                <a class="btn btn-success" href="/fact/{{ $e->id }}/edit">edit</a>
                <form action="/fact/{{ $e->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger ml-2"  type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
