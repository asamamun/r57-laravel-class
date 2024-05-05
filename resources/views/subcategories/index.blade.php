@extends('layouts.main', ['title' => 'Subcategories Management'])

@section('content')
<h1>welcome to Subcategories page</h1>
<a class="btn btn-primary" href="{{route('subcategories.create')}}">Create New</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($subcategories as $subcategory)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $subcategory->name }}</td>
            <td>{{ $subcategory->category->name }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No Subcategories Available</td>
        </tr>
        @endforelse
    </tbody>
</table>


@endsection


