@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">retour</a>
    <h1 class="my-5">Créer un article</h1>
    <form action="/posts" method="post">
        @csrf
        <div class="form-group">
          <label>Titre</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Texte</label>
          <textarea id="textarea" name="body" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregister</button>
    </form>
@endsection
