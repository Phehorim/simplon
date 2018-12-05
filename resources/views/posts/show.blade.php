@extends('layouts.app')

@section('content')
    <a href="/home" class="btn btn-secondary my-4">retour aux articles</a>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{$post->title}}</h1>
            <div class="card-text">
                {{$post->body}}
            </div>
        </div>
    </div>
    <small>Publié le {{$post->created_at}}</small>
    @auth
        <div class="row mt-4">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mx-3">Modifier</a>
            <form action="/posts/{{$post->id}}" method="post" class="mx-3">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    @endauth
@endsection
