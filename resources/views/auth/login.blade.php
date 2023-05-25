<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-5 col-lg-5 mx-auto">
            <div class="card mt-5">
                <img src="" width="100px" height="100px" class="mx-auto mt-5" />
                <div class="card-title mx-auto mt-5"><h3>Library Management System</h3></div>
                <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput" required placeholder="name@example.com" autocomplete="current-password">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword"  required placeholder="Password" autocomplete="current-password" >
                        <label for="floatingPassword">Password</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-5">
                        <button class="btn btn-outline-success" type="submit">LOGIN</button>
                    </div>
                            <ul class="text-right">
                                <li class="nav-item mt-5" style="list-style-type: none;float:right">
                                    Don't have an account yet?
                                    <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            </ul>
                </form>
            </div>
        </div>
        </div>
    </div>

</body>
</html>

