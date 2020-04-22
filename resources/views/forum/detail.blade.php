@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/forum.css')}}">

<main id="detail">
    <div class="container">
        <section id="banner">
            <div class="text-center">
                <h1 class="heading">
                    Post Detail
                </h1>
            </div>
        </section>

        <section id="post">
            <div class="card">
                <div class="card-body">
                    <h2>{{$post->title}}</h2>
                <img src="{{url('')}}/{{$post->image}}" class="img-fluid">
    
                    <div class="row">
                        <div class="col">
                        <small>Created At: {{$post->created_at}}</small>
                        </div>
    
                        {{-- <div class="col">
                        <small>Author: {{$post->author}}</small>
                        </div> --}}
                    </div>
    
                    <div class="paragraph">
                        {{$post->content}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
