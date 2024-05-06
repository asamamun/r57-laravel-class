@extends('layouts.main', ['title' => 'Subcategories Management'])

@section('content')
<h1>Create new Subcategory</h1>
 {{ html()->form()->route('subcategories.store')->open() }}

 @include('subcategories.form')
    

    {{ html()->submit('Submit')->class('btn btn-primary') }}

{{ html()->form()->close() }}
<hr>

@endsection


