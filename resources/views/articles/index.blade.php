@extends('layout')

@section('title')
    Articles List
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Articles</h1>
            <p><a href="articles/create">Add new Article</a></p>
        </div>

    <hr>
    <div class="row">
        <div class="col-12">
            @foreach ($articles as $article)
            <div class="container mt-4 border border-light text-center myArticle" id="myArticles">
                <div class="row d-flex justify-content-center mr-5">
                    <div class="col-4 offset-4 blogTitle">
                        <h3 class="biggerfont post-title mr-6 text-center">
                            <a href="/articles/{{ $article->slug }}">
                                {{ $article->title }}
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-end">
                    <div class="col-2 offset-10">
                    <h5 class="text-muted">{{$article->publish }}</h5>
                    </div>
                </div>
                <div class="row">
                    <p>{{$article->content}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
