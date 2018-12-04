@extends('layouts.app')

@section('content')
    <a href="/admin" class="btn btn-secondary">retour</a>
    <h1>Modifier l'article</h1>
    <form action="/posts/{{$post->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label>Titre</label>
          <input type="text" name="title" class="form-control" value="{{$post->title}}">
        </div>
        <div class="form-group">
          <label>Texte</label>
          <textarea name="body" rows="8" cols="80" class="form-control">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
