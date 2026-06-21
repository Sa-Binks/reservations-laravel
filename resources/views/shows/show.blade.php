<!DOCTYPE html>
<html>
<head>
    <title>{{ $show->title }}</title>
</head>
<body>

<h1>{{ $show->title }}</h1>

<p>{{ $show->description }}</p>

<p>Prix : {{ $show->price }} €</p>

<p>Date : {{ $show->date }}</p>

<p>
    <a href="/reserve/{{ $show->id }}">
        Réserver ce spectacle
    </a>
</p>

<a href="/shows">Retour au catalogue</a>

</body>
</html>