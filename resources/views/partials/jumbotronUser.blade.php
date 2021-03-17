<div class="my-5">
    <div class="jumbotron">
        <h1 class="display-4">{{$show->profils->name}} {{$show->profils->surname}}</h1>
        <p class="lead">Pseudo : {{$show->pseudo}}</p>
        <hr class="my-4">
        <p class="lead">{{$show->email}}</p>
        <p class="lead">{{$show->profils->age}}</p>
        @foreach ($photos as $item)
            @if ($item->user_id == $show->id)
                <img class="rounded mx-3" height="150px" src="{{asset('img/'.$item->src)}}" alt="">
            @endif
        @endforeach
        <form class="my-5" action="/users/{{$show->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>