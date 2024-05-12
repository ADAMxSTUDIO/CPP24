<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activite</title>
    @extends('layouts.app')
</head>

<body>
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Create Activity</h3>
        <form action="{{ route('activites.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom" class="text-success">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="description" class="text-success">Description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="tarif" class="text-success">Tarif:</label>
                <input type="number" class="form-control" id="tarif" name="tarif" placeholder="Tarif">
            </div>

            <button type="submit" class="btn btn-success w-100">Ajouter</button>
        </form>
    </div>

</body>

</html>
