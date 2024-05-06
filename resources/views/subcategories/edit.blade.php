@extends('layouts.main', ['title' => 'Edit Subcategory'])
@section('content')
<h1>Edit Subcategory</h1>
{{ html()->modelForm($subcategory, 'PUT', route('subcategories.update', $subcategory))->open() }}
    @include('subcategories.form')

    <div class="form-group">
        {{ html()->submit('Submit')->class('btn btn-primary') }}
    </div>

{{ html()->closeModelForm() }}
@endsection