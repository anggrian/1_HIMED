
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
        <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
    </style>

    <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">

</head>

<body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('register')}}">
        {{ csrf_field()}}
        <h1 class="h3 mb-3 fw-normal">Register {{ config('app.name') }}</h1>

        <label for="inputEmail" class="visually-hidden">User Name</label>
        <input type="text" name="name" id="inputEmail" value="{{ old('name')}}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " placeholder="Please insert your name" required autofocus>
        @if ($errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name')}}
            </div>
        @endif
        
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" name="email" id="inputEmail" value="{{ old('email')}}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" required>
        @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{ $errors->first('email')}}
            </div>
        @endif

        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                {{ $errors->first('password')}}
            </div>
        @endif

        <label for="inputPassword" class="visually-hidden">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Corfirmation" required>
        @if ($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{ $errors->first('password_confirmation')}}
            </div>
        @endif
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
</body>
</html>
  