@extends('layout')

@section('title', 'Details for ' . $article->title)


@section('content')
    <div class="row">
        <div class="col-12">
        <h2>Details for : <i>{{ $article->title}}</i></h2>
        </div>
        <div class="col-12">
            <p><a href="/articles/{{$article->id }}/edit">Edit</a></p>
            <form action="/articles/{{$article->id}}" method="POST">
                @method('DELETE')
                @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Title : </strong>{{ $article->title}}</p>
            <p><strong>Content : </strong>{{ $article->content}}</p>
            <p><strong>User Id : </strong>{{ $article->user_id}}</p>
            <p><strong>Published : </strong>{{ $article->publish ? 'Yes' : 'No'}}</p>
            <p><strong>Created On : </strong>{{ $article->created_at->toDateString()}}</p>
        </div>
    </div>


    <hr>
@endsection
