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
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Create Inscription</h3>
        <form action="{{ route('inscriptions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="membre_id" class="text-success">Membre_id:</label>
                <input type="number" class="form-control" id="membre_id" name="membre_id" placeholder="membre_id">
            </div>
            <div class="form-group">
                <label for="activite_id" class="text-success">Activite_id:</label>
                <input type="number" class="form-control" id="activite_id" name="activite_id" placeholder="activite_id">
            </div>
            <div class="form-group">
                <label for="date_inscription" class="text-success">Date inscription:</label>
                <input type="date" class="form-control" id="date_inscription" name="date_inscription" placeholder="date_inscription">
            </div>

            <button type="submit" class="btn btn-success w-100">Ajouter</button>
        </form>
    </div>

</body>

</html>
