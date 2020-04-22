@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">

<main id="dashboard">
    <div class="container">
        <section id="banner">
            <div class="text-center">
                <h1 class="heading">Dashboard</h1>
            </div>
        </section>

        <section id="post">
            <div class="wrapper">
                <div class="row justify-content-between">
                    <div class="col">
                        <h3>
                            Owned Posts
                        </h3>
                    </div>
                </div>
                @include('inc.message')
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col" class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($posts)>0)
                        <?php $no=0;?>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{++$no}}</th>
                            <td><img src="{{$post->image}}" class="img-fluid" style="max-height: 300px"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" id="toggle_update" data-toggle="modal"
                                    data-target="#update" data-title='{{$post->title}}' data-id="{{$post->id}}"
                                    data-content="{{$post->content}}">
                                    Update
                                </button>
                            </td>
                            <td>
                                <a href="{{url('/post/delete')}}/{{$post->id}}" class="btn btn-primary">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

                <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{url('/post/update')}}">
                                <input type="hidden" name="id" id="post_id">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea type="text" class="form-control" id="content" name="content"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('#toggle_update').click(function () {
            const id = $(this).attr('data-id')
            const title = $(this).attr('data-title')
            const content = $(this).attr('data-content')


            $('#post_id').attr('value', id);
            $('#title').attr('value', title);
            $('#content').html(content);
        })
    })

</script>
@endsection
