<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
    @extends('layouts.app')
</head>

<body>
    @include('layouts.nav')
    <div class="container">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Members Dashboard</h3>
        <a class="btn btn-success w-100" href="{{ route('membres.create') }}">
            <strong>+ Ajouter un nouveau membre</strong>
        </a>

        <form action="{{ route('membres.filter') }}" method="post" class="d-flex m-1" style="gap: 5px;">
            @csrf
            <input class="form-control me-2" type="number" placeholder="Rechercher le membre par son ID..."
                aria-label="Search" name="filter">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date Naissance</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Ajouté à</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            @isset($membre)
                <tbody>
                    <tr>
                        <th scope="row">{{ $membre->id }}</th>
                        <td>{{ $membre->nom }}</td>
                        <td>{{ $membre->prenom }}</td>
                        <td>{{ $membre->date_naissance }}</td>
                        <td>{{ $membre->adresse }}</td>
                        <td>{{ $membre->email }}</td>
                        <td>{{ $membre->telephone }}</td>
                        <td>{{ $membre->created_at }}</td>
                        <td>
                            <a class="btn btn-success w-100" href="{{ route('membres.edit', $membre->id) }}">
                                <strong>Modifier</strong>
                            </a>
                            <a class="btn btn-danger mt-2 w-100" href="{{ route('membres.destroy', $membre->id) }}">
                                <strong>Supprimer</strong>
                            </a>
                        </td>
                    </tr>
                </tbody>
            @else
                @isset($membres)
                    <tbody>
                        @foreach ($membres as $membre)
                            <tr>
                                <th scope="row">{{ $membre->id }}</th>
                                <td>{{ $membre->nom }}</td>
                                <td>{{ $membre->prenom }}</td>
                                <td>{{ $membre->date_naissance }}</td>
                                <td>{{ $membre->adresse }}</td>
                                <td>{{ $membre->email }}</td>
                                <td>{{ $membre->telephone }}</td>
                                <td>{{ $membre->created_at }}</td>
                                <td>
                                    <a class="btn btn-success w-100" href="{{ route('membres.edit', $membre->id) }}">
                                        <strong>Modifier</strong>
                                    </a>
                                    <a class="btn btn-danger mt-2 w-100" href="{{ route('membres.destroy', $membre->id) }}">
                                        <strong>Supprimer</strong>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endisset
            @endisset
        </table>
        @isset($membres)
            {{ $membres->links() }}
        @endisset
    </div>
</body>

</html>
