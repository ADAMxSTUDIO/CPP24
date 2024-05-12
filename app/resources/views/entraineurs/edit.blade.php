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
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Edit Trainer - {{$entraineur->id}}</h3>
        <form action="{{ route('entraineurs.update', $entraineur->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom" class="text-success">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="{{ $entraineur->nom }}">
            </div>
            <div class="form-group">
                <label for="prenom" class="text-success">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" value="{{ $entraineur->prenom }}">
            </div>
            <div class="form-group">
                <label for="specialite" class="text-success">Specialite:</label>
                <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Specialite" value="{{ $entraineur->specialite }}">
            </div>
            <div class="form-group">
                <label for="date_embauche" class="text-success">Date Embauche:</label>
                <input type="date" class="form-control" id="date_embauche" name="date_embauche" placeholder="Date embauche" value="{{ $entraineur->date_embauche }}">
            </div>
            <div class="form-group">
                <label for="salaire" class="text-success">Salaire:</label>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="salaire" value="{{ $entraineur->salaire }}">
            </div>

            <button type="submit" class="btn btn-success w-100">Modifier</button>
        </form>
    </div>

</body>

</html>
