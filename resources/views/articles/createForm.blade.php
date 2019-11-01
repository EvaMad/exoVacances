<!DOCTYPE html>
<html>

<head> <title>create</title> </head>

<body>

    <h1>hello :3</h1>

<form method="POST" action="/articles">
{{ csrf_field() }}
    <p>

        <label> articleName </label> <input type="text" name="name" />
        <br/>
        <label> articlePrice </label> <input type="number" name="price" /> <label> € </label>
        <br/>
        <input type="submit" name="submit" />

    </p>

</form>

</body>

</html>