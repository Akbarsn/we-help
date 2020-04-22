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
                        Register
                    </div>
                    @include('inc.message')
                    <form method="POST" class="center" action="{{url('/register')}}">
                        @csrf
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="center">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
