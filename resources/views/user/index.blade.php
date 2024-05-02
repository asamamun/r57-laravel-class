@extends('layouts.main', ['title' => 'User Management 1'])

@section('head')
    
@endsection
@section('content')
<h1>welcome to User page</h1>
<table class="table table-striped table-hover table-bordered table-sm text-center mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->roles }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>  
        @empty
            <h1>no users found!!</h1>
        @endforelse
    </tbody>
</table>
{{ $users->onEachSide(3)->links() }}
@endsection

@section('rightbar')
    <h3>this will go to rightbar</h3>
@endsection


@section('navbarlink')
<li class="nav-item">
    <a class="nav-link" href="#">Add User</a>
  </li>
@endsection
    