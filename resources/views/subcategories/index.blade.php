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
            <th>Slug</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($subcategories as $subcategory)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $subcategory->name }}</td>
            <td>{{ $subcategory->category->name }}</td>
            <td>{{ $subcategory->slug }}</td>
            <td><img src="{{ asset('storage/'.$subcategory->image) }}" width="50px"></td>
            <td>{{ $subcategory->status == 1 ? 'Active' : 'Not Active' }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('subcategories.edit', $subcategory) }}" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="{{ route('subcategories.destroy', $subcategory) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('subcategories.show', $subcategory) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
        </tr>
        @empty
        <tr>
            <td colspan="3">No Subcategories Available</td>
        </tr>
        @endforelse
    </tbody>
</table>


@endsection


