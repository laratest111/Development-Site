@extends('admin/template')

@section('content')

    <div class="box box-primary" class="box-header with-border">
        <h1 class="box-title"><strong>{{$post->name}}</strong></h1>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label for="name">{{$post->content}}</label>
            <hr>
        </div>

        <div class="comments">
            <ul class="list-group-item">

                @foreach($post->commentsPost as $comment)

                    <div class="item">
                        <img src="{{asset('Admin/dist/img/user4-128x128.jpg')}}" alt="user image" class="online">

                        <p class="message">
                            <a href="#" class="name">
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>

                                {{ auth()->user()->name }}:

                            </a>

                        </p>
                    </div>


                    <li class="list-group-item">

                        <strong>{{ $comment->created_at->diffForHumans() }} : &nbsp </strong>

                        {{$comment->content}}

                    </li>

                @endforeach
            </ul>
        </div>
    </div><hr>

    <div class="container">

        <div class="card">

            <div class="card-block">

                <form method="post" action="/pages/{{ $post->id }}/comments">

                    {{ csrf_field() }}

                    <div class="form-group">

                            <textarea name="content" placeholder="Your Comment Here."
                                      class="form-control" required></textarea>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('admin.errors')

            </div>
        </div>
    </div>







@endsection

