@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">retour</a>
    <h1>{{$post->title}}</h1>
    <div class="">
        {{$post->body}}
    </div>
    <small>Publié le {{$post->created_at}}</small>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Modifier</a>
    <form action="/posts/{{$post->id}}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
@endsection
