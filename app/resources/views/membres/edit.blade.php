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
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Edit Membre - {{$membre->id}}</h3>
        <form action="{{ route('membres.update', $membre->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom" class="text-success">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"
                    value="{{ $membre->nom }}">
            </div>
            <div class="form-group">
                <label for="prenom" class="text-success">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
                    value="{{ $membre->prenom }}">
            </div>
            <div class="form-group">
                <label for="date_naissance" class="text-success">Date Naissance:</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance"
                    placeholder="Date Naissance" value="{{ $membre->date_naissance }}">
            </div>
            <div class="form-group">
                <label for="adresse" class="text-success">Adresse:</label>
                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse"
                    value="{{ $membre->adresse }}">
            </div>
            <div class="form-group">
                <label for="email" class="text-success">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                    value="{{ $membre->email }}">
            </div>
            <div class="form-group">
                <label for="telephone" class="text-success">Telephone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone"
                    value="{{ $membre->telephone }}">
            </div>

            <button type="submit" class="btn btn-success w-100">Modifier</button>
        </form>
    </div>

</body>

</html>
