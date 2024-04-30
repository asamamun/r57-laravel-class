<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('inc.navbar')
    <hr>
    {{ time() }} -  <?= time() ?>
    <h1>{{ $title }}</h1>
    <h1>{!! $title !!}</h1>
    <a href="{{url('todo/add')}}" class="btn btn-primary">Create New Todo</a>
    {{-- @foreach ($todos as $todo)
        <li>{{ $todo->title }} - {{ $todo->description }} - {{ $todo->is_completed }}</li>
    @endforeach --}}
    @auth
        <marquee behavior="" direction="">only logged in users will see this</marquee>
    @endauth

    @guest
        <marquee behavior="" direction="">onlynot logged in users will see this</marquee>
    @endguest
<hr>
    @forelse ($todos as $todo)
    <li>{{ $todo->title }} - {{ $todo->description }} - {{ $todo->is_completed }}</li> 
    @empty
        <h3>no list found</h3>
    @endforelse
    <hr>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>