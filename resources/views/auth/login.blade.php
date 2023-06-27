<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/pulse.css') }}">
</head>
<style>
    .form-control
    {
        height: 30px;
    }
</style>
<body>
    <div class="container">
        <h1 class="text mt-4 text-center text-success">Fortify Login</h1>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="" class="form-control">
                </div>
                <div class="col">
                    <label  class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
            </div>
            <label  class="form-label" for="password">Password</label>
            <input type="password" name="password" id="" class="form-control">
            <button class="btn my-3 mt-3 btn-success container-fluid">Se Connecter</button>
        </form>
    </div>
<script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
</body>
</html>
