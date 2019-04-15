<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel Radio Checklist</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="card mx-auto mt-5" style="width: 25rem;">
            <div class="card-header bg-primary">
                <h1 class="h3 font-weight-normal text-white text-center">Login Radio Checklist</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputEmail1">Alamat email</label>
                    <input type="email" class="form-control" id="inputEmail1" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword1">Password</label>
                    <input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya.</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    </form>
</body>

</html>