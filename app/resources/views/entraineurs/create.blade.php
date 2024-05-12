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
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Create Trainer</h3>
        <form action="{{ route('entraineurs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom" class="text-success">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="prenom" class="text-success">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="specialite" class="text-success">Specialite:</label>
                <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Specialite">
            </div>
            <div class="form-group">
                <label for="date_embauche" class="text-success">Date Embauche:</label>
                <input type="date" class="form-control" id="date_embauche" name="date_embauche" placeholder="Date embauche">
            </div>
            <div class="form-group">
                <label for="salaire" class="text-success">Salaire:</label>
                <input type="number" class="form-control" id="salaire" name="salaire" placeholder="salaire">
            </div>

            <button type="submit" class="btn btn-success w-100">Ajouter</button>
        </form>
    </div>

</body>

</html>
