<div class="mb-5 text-center">
    <h1>Skills</h1>
    <hr class="w-50">
    <a class="btn btn-primary" href="{{ route("skill.create") }}">Create</a>
</div>
<table class="table w-75 mx-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Language</th>
      <th scope="col">Skill</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($skills as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->language}}</td>
            <td>{{$e->percentage}}%</td>
            <td class="d-flex">
                <a class="btn btn-success" href="/skill/{{ $e->id }}/edit">edit</a>
                <form action="/skill/{{ $e->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger ml-2"  type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>