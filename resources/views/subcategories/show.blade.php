@extends('layouts.main', ['title' => 'View Subcategory'])
@section('content')
<h1>View Subcategory</h1>
<h3>{{ $subcategory->name }}</h3>
<h3>{{ $subcategory->slug }}</h3>
<p>{{ $subcategory->description }}</p>
<p>{{ $subcategory->image }}</p>
<p>{{ $subcategory->status }}</p>
<p>{{ $subcategory->created_at }}</p>
<p>{{ $subcategory->updated_at }}</p>
<hr>
<a class="btn btn-primary" href="{{route('subcategories.edit', $subcategory)}}">Edit</a>
<a class="btn btn-primary" href="{{route('subcategories.index')}}">Back</a>
@endsection