@extends('layouts.main', ['title' => 'Todo List'])
@section('head')
    
@endsection

@section('content')
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
@endsection

@section('rightbar')
    <ul>
        <li>links</li>
        <li>links</li>
        <li>links</li>
        <li>links</li>
        <li>links</li>
    </ul>
    <hr>
    @parent
    
    
@endsection