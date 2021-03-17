<h1 class="text-center">All Users</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->profils->name}}</td>
            <td>{{$item->profils->surname}}</td>
            <td><a class="btn btn-info" href="users/{{$item->id}}">Details</a></td>
        </tr>
      @endforeach
    </tbody>
</table>