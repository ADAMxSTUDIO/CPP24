<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entraineurs</title>
    @extends('layouts.app')
</head>

<body>
    @include('layouts.nav')
    
    <div class="container">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Trainer Dashboard</h3>
        <a class="btn btn-success w-100" href="{{ route('entraineurs.create') }}">
            <strong>+ Ajouter un nouveau entraineur</strong>
        </a>

        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Specialite</th>
                    <th scope="col">Date Embauche</th>
                    <th scope="col">Salaire</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($entraineurs as $entraineur)
                    <tr>
                        <th scope="row">{{ $entraineur->id }}</th>
                        <td>{{ $entraineur->nom }}</td>
                        <td>{{ $entraineur->prenom }}</td>
                        <td>{{ $entraineur->specialite }}</td>
                        <td>{{ $entraineur->date_embauche }}</td>
                        <td>{{ $entraineur->salaire }} DHs</td>
                        <td>
                            <a class="btn btn-success w-100" href="{{ route('entraineurs.edit', $entraineur->id) }}">
                                <strong>Modifier</strong>
                            </a>
                            <a class="btn btn-danger mt-2 w-100" href="{{ route('entraineurs.destroy', $entraineur->id) }}">
                                <strong>Licencier</strong>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</body>

</html>
