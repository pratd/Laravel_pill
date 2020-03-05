@extends('layout')

@section('title', 'Add new Article')


@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add new Article</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <form action="/articles" method="post">


                @include('articles/form')

                <button class="btn btn-primary"type="submit">Add Article</button>

            </form>
        </div>
    </div>


    <hr>
@endsection
