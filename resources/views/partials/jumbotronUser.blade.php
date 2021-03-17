<div class="my-5">
    <div class="jumbotron">
        <h1 class="display-4">{{$show->profils->name}} {{$show->profils->surname}}</h1>
        <p class="lead">Pseudo : {{$show->pseudo}}</p>
        <hr class="my-4">
        <p class="lead">{{$show->email}}</p>
        <p class="lead">{{$show->profils->age}}</p>
        {{-- @if ($show->photos->src)
            <img height="150px" src="{{asset('img/'.$show->photos->src)}}" alt="">
        @endif --}}
    </div>
</div>