@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/homepage.css')}}">

<main id="homepage">
    <section id="jumbotron">
        <div class="container-fluid">
            <div class="isi">
                <h1 class="heading">We Help</h1>
                <h4 class="subheading">Everything will be fine.</h4>
                <h4 class="subheading">All Is Well.</h4>
                <h4 class="subheading">Everything gonna be okay.</h4>
            </div>
        </div>
    </section>

    <section id="join_us">
        <div class="container">
            <h2 class="heading">
                Join Us Right Now
            </h2>
            <h4 class="sub-heading">
                Let's Help Other People
            </h4>
            <br>
            <a href="{{url('/register')}}" class="btn btn-primary">Register Now</a>
        </div>
    </section>

    <section id="forum">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="isi">
                        <h3 class="heading">Forum without someone to judge</h3>
                        <h5 class="subheading">Our forum will be overseer by admin
                            and guaranteed no cyber bullying or any form of shaming</h5>

                        <a class="btn btn-primary">Check It Out</a>
                    </div>
                </div>
                <div class="col">
                    <img src="{{asset('img/forum.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="informasi">
        <div class="row">
            <div class="col">
                <div class="container">
                    <h3 class="heading text-center">Want to find psychologist around you?</h3>
                    <div class="center">
                        <a class="btn btn-primary">Find it here</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h3 class="heading text-center">Want to check your mental condition?</h3>
                    <div class="center">
                        <a class="btn btn-primary">Check it here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
