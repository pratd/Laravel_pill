@extends('layout')

@section('title', 'Edit Details for ' .$article->name)


@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for : <i>{{$article->name}}</i></h1>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
        <form action="/articles/{{ $article->id}}" method="post">
                @method('PATCH')

                @include('articles/formEdit')

                <button class="btn btn-primary"type="submit">Update</button>

            </form>
        </div>
    </div>


    <hr>
@endsection
