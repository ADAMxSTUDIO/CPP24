<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscriptions</title>
    @extends('layouts.app')
</head>

<body>
    @include('layouts.nav')
    
    <div class="container">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Inscription Dashboard</h3>
        <a class="btn btn-success w-100" href="{{ route('inscriptions.create') }}">
            <strong>+ Ajouter un nouveau inscription</strong>
        </a>

        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Membre_id</th>
                    <th scope="col">Activite_id</th>
                    <th scope="col">Date inscription</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($inscriptions as $inscription)
                    <tr>
                        <th scope="row">{{ $inscription->id }}</th>
                        <td>{{ $inscription->membre_id }} - {{ $inscription->membre->nom }}</td>
                        <td>{{ $inscription->activite_id }} - {{ $inscription->activite->nom }}</td>
                        <td>{{ $inscription->date_inscription }}</td>
                        <td>
                            <a class="btn btn-success w-100" href="{{ route('inscriptions.edit', $inscription->id) }}">
                                <strong>Modifier</strong>
                            </a>
                            <a class="btn btn-danger mt-2 w-100" href="{{ route('inscriptions.destroy', $inscription->id) }}">
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
