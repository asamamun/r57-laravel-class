@extends('layouts.main', ['title' => 'Create Todo'])

@section('content')
<div class="container">
    <h1>welcome to create todo page</h1>
    <form action="{{ url('todo') }}" method="POST">
        @csrf
        {{-- @method('delete') --}}
        <p>
            <strong>CSRF</strong> stands for Cross-Site Request Forgery. It's a security vulnerability that allows
            an attacker to make requests from your own browser to a vulnerable website, even if you're logged in.
            <br>
            The form below is protected against CSRF attacks by using the @csrf directive. This directive generates
            a unique token for each form and checks that the token sent with the form matches the token in the
            session.
        </p>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" value="1" name="is_completed" id="is_completed">
            <label class="form-check-label" for="is_completed">Is completed</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
