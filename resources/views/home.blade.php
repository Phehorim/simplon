@extends('layouts.app')

@section('content')
    <h1 class="my-5">Simplon Laravel Challenge</h1>
    @if (count($posts) > 0)
        <div class="list-group">
            @foreach ($posts as $post)
                <div class="list-group-item">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Publié le {{$post->created_at}}</small>
                </div>
            @endforeach
        </div>
        {{$posts->links()}}
    @else
        <p>Il n'y a pas d'article</p>
    @endif
@endsection
