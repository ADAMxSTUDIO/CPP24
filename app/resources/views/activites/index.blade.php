<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activites</title>
    @extends('layouts.app')
</head>

<body>
    @include('layouts.nav')
    
    <div class="container">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Activity Dashboard</h3>
        <a class="btn btn-success w-100" href="{{ route('activites.create') }}">
            <strong>+ Ajouter un nouveau activite</strong>
        </a>

        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Tarif</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($activites as $activite)
                    <tr>
                        <th scope="row">{{ $activite->id }}</th>
                        <td>{{ $activite->nom }}</td>
                        <td>{{ $activite->description }}</td>
                        <td>{{ $activite->tarif }} DHs</td>
                        <td>
                            <a class="btn btn-success w-100" href="{{ route('activites.edit', $activite->id) }}">
                                <strong>Modifier</strong>
                            </a>
                            <a class="btn btn-danger mt-2 w-100" href="{{ route('activites.destroy', $activite->id) }}">
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
