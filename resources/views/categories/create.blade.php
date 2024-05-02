@extends('layouts.main', ['title' => 'Add New Category'])

@section('content')
    <div class="mb-3">
        <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Back</a>
    </div>
    <h1>Categories Table</h1>

    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>            
            <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*;capture=camera">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            {{-- <input type="text" class="form-control" name="status" id="status"> --}}
            <select name="status" id="status" class="form-select">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection