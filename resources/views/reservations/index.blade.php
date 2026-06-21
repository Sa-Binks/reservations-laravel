<!DOCTYPE html>
<html>
<head>
    <title>Mes réservations</title>
</head>
<body>

<h1>Mes réservations</h1>

@foreach($reservations as $reservation)

    <h2>{{ $reservation->show->title }}</h2>

    <p>Nombre de places : {{ $reservation->quantity }}</p>

    <p>Date de réservation : {{ $reservation->created_at }}</p>

    <hr>

@endforeach

</body>
</html>