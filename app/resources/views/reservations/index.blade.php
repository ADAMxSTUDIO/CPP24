<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservations</title>
    @extends('layouts.app')
</head>

<body>
    @include('layouts.nav')
    
    <div class="container">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Trainer Dashboard</h3>
        <a class="btn btn-success w-100" href="{{ route('reservations.create') }}">
            <strong>+ Ajouter une nouvelle reservation</strong>
        </a>

        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Membre</th>
                    <th scope="col">Entraineur</th>
                    <th scope="col">Activite</th>
                    <th scope="col">Date Reservation</th>
                    <th scope="col">Details</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                    <tr>
                        <th scope="row">{{ $reservation->id }}</th>
                        <td>{{ $reservation->membre_id }} - {{ $reservation->membre->nom }}</td>
                        <td>{{ $reservation->entraineur_id }} - {{ $reservation->entraineur->nom }}</td>
                        <td>{{ $reservation->activite_id }} - {{ $reservation->activite->nom }}</td>
                        <td>{{ $reservation->date_reservation }}</td>
                        <td>{{ $reservation->details }}</td>
                        <td>
                            <a class="btn btn-success w-100" href="{{ route('reservations.edit', $reservation->id) }}">
                                <strong>Modifier</strong>
                            </a>
                            <a class="btn btn-danger mt-2 w-100" href="{{ route('reservations.destroy', $reservation->id) }}">
                                <strong>Supprimer</strong>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</body>

</html>
