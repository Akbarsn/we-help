@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/forum.css')}}">

<main id="forum">
    <div class="container">
        <section id="banner">
            <div class="text-center">
                <h1 class="heading">
                    Welcome to the Forum
                </h1>
            </div>
        </section>

        @if ($login)
        <div class="col-11">
            <section id="create">
                <h4>How's Your Day?</h4>
                <form method="POST" action="{{url('/post/create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Eg. My Bad Day"
                            required>
                    </div>
    
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="content" placeholder="Something happen today ..."
                            name="content" required></textarea>
                    </div>
    
                    <div class="form-group">
                        <input type="file" id="image" name="image" required>
                    </div>
    
                    <div class="center">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </section>
        </div>
        @endif

        <section id="all_posts">
            <div class="col-10">
                <div class="row" id="posts">
                    @if (count($posts)>0)
                    @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{url('')}}/{{$post->image}}" class="img-fluid">
                                    </div>

                                    <div class="col-8 text">
                                        <h3 class="heading">
                                            {{$post->title}}
                                        </h3>

                                        <h5 class="paragraph">
                                            {{$post->content}}
                                        </h5>

                                        <a href="{{url('/forum')}}/{{$post->id}}">Read More . . .</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach
                    @else
                    <div class="text-center">
                        <h3>There is no post</h3>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
