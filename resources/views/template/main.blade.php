<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="row m-0 p-0">
        <div id="menuBO" class="col-2 bg-secondary m-0">
            @include('partials.menuBO')
        </div>
        
    
        <div class="col-10 m-0">
            @yield('content')
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>