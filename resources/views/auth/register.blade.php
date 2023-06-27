<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/pulse.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col">
                    <label  class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="{{ old('email') }}">
                    @error('email')
                    {{ $message }}
                @enderror
                </div>
            </div>
            <label  class="form-label" for="password">Password</label>
            <input type="password" name="password" id="" class="form-control" value="{{ old('password') }}">
            @error('password')
            {{ $message }}
        @enderror
        <label  class="form-label" for="password">Confirmation</label>
        <input type="password" name="confirm_password" id="" class="form-control" value="{{ old('confirm_password') }}">
        @error('confirm_password')
        {{ $message }}
    @enderror
            <button class="btn btn-success mt-3 container-fluid">S'inscrire</button>
        </form>
    </div>
<script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
</body>
</html>
