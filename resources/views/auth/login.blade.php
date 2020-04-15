@extends('layouts.auth')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}">

<main>
    <div id="bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4 isi">
                    <div class="text-center text-heading">
                        Login
                    </div>
                    <form method="POST" class="center" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="center">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                        <div class="text-heading-2 text-center">
                            Don't have an account ?&nbsp;<a href="/register">Register Here !</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
