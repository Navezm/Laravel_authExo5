<h1 class="text-center my-5">See all your images</h1>

<div class="row">
    @foreach ($photos as $item)
        <div class="col-4">
            <img height="150" src="{{asset('img/'.$item->src)}}" alt="">
        </div>
        @if ($loop->iteration % 3 ==0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>