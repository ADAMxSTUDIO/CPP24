<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    @extends('layouts.app')
</head>

<body>
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Edit Inscription - {{$inscription->id}}</h3>
        <form action="{{ route('inscriptions.update', $inscription->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="membre_id" class="text-success">Membre_id:</label>
                <input type="number" class="form-control" id="membre_id" name="membre_id" placeholder="membre_id" value="{{ $inscription->membre_id }}">
            </div>
            <div class="form-group">
                <label for="activite_id" class="text-success">Activite_id:</label>
                <input type="number" class="form-control" id="activite_id" name="activite_id" placeholder="activite_id" value="{{ $inscription->activite_id }}">
            </div>
            <div class="form-group">
                <label for="date_inscription" class="text-success">Date inscription:</label>
                <input type="date" class="form-control" id="date_inscription" name="date_inscription" placeholder="date_inscription" value="{{ $inscription->date_inscription }}">
            </div>

            <button type="submit" class="btn btn-success w-100">Modifier</button>
        </form>
    </div>

</body>

</html>
