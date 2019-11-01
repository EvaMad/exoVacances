<!DOCTYPE html>
<html>

<head> <title>edit</title> </head>

<body>

    <h1>article edition...</h1>

<form method="POST" action="/articles/{{ $article->id }}">
{{ csrf_field() }}
{{ method_field('PATCH') }}

    <p>

        <label> articleName </label> <input type="text" name="name" value="{{ $article->name }}" />
        <br/>
        <label> articlePrice </label> <input type="number" name="price" value="{{ $article->price }}" /> <label> € </label>
        <br/>
        <input type="submit" name="submit" />

    </p>

</form>

</body>

</html>