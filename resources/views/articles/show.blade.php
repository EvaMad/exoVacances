<!DOCTYPE html>
<html>
  <head>
    <title>Article {{ $article->id }}</title>
  </head>
  <body>
    <h1>Article {{ $article->id }}</h1>
    <ul>
      <li>Name: {{ $article->name }}</li>
      <li>Price: {{ $article->price }}</li>
      <li>Created at: {{ $article->created_at }}</li>
      <a href="/articles/{{ $article->id }}/delete"> delete </a>
    </ul>
  </body>
</html>