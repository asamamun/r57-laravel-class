@extends('layouts.main', ['title' => 'Add New Category'])

@section('content')
    <div class="mb-3">
        <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
    <h1>Categories Table</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" id="image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" name="status" id="status">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection