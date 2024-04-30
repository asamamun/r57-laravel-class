<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    @include('inc.navbar')
    <hr>
    <div class="container">
        <h1>welcome to create todo page</h1>
        <form action="{{ url('todo') }}" method="POST">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
