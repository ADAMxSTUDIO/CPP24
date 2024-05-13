<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscriptions</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Create Inscription</h3>
        <form action="{{ route('inscriptions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="membre_id" class="text-success">Membre:</label>
                <select class="form-control" name="membre_id">
                    @foreach ($membres as $membre)
                        <option value="{{ $membre->id }}">{{ $membre->id }} - {{ $membre->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="activite_id" class="text-success">Activite:</label>
                <select class="form-control" name="activite_id">
                    @foreach ($activites as $activite)
                        <option value="{{ $activite->id }}">{{ $activite->id }} - {{ $activite->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_inscription" class="text-success">Date inscription:</label>
                <input type="date" class="form-control" id="date_inscription" name="date_inscription"
                    placeholder="Date inscription">
            </div>

            <button type="submit" class="btn btn-success w-100">Ajouter</button>
        </form>
    </div>

</body>

</html>
