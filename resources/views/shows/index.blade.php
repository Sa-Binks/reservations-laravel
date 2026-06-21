<!DOCTYPE html>
<html>
<head>
    <title>Catalogue des spectacles</title>
</head>
<body>

<h1>Catalogue des spectacles</h1>

<form method="GET" action="/shows">
    <input type="text" name="search" placeholder="Rechercher un spectacle">
    <button type="submit">Rechercher</button>
</form>

@foreach($shows as $show)

    <h2>{{ $show->title }}</h2>

    <p>{{ $show->description }}</p>

    <p>Prix : {{ $show->price }} €</p>

    <hr>

@endforeach

</body>
</html>