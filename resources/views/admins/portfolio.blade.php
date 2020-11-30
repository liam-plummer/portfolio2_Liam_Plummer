<div class="mb-5 text-center">
    <h1>Portfolio</h1>
    <hr class="w-50">
    <a class="btn btn-primary" href="{{ route("portfolio.create") }}">Create</a>
</div>
<table class="table w-75 mx-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($portfolios as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td><img src="{{asset($e->image)}}" height="50px" width="50px" alt=""></td>
            <td>{{$e->category}}</td>
            <td class="d-flex">
                <a class="btn btn-success" href="/portfolio/{{ $e->id }}/edit">edit</a>
                <form action="/portfolio/{{ $e->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger ml-2"  type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

