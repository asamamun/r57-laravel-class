@extends('layouts.main', ['title' => 'Categories Management'])

@section('content')
    <h1>Categories Table</h1>
    <div class="table-responsive">
        <a href="{{ route('categories.create') }}" class="btn btn-outline-primary">Create New Category</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Subcategories</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            @forelse ($category->subcategories as $sc)
                                <li class="text-success">{{ $sc->name }}</li>
                            @empty
                                <li class="text-danger">No subcategories</li>
                            @endforelse
                        </td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->description }}</td>
                        <td><img src="{{ asset('storage/'.$category->image) }}" width="50px"></td>
                        <td>{{ $category->status == 1 ? 'Active' : 'Not Active' }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<hr>
    {{ $categories->links() }}

@endsection