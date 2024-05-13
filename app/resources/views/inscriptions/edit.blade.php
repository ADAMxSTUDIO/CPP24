<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Edit Inscription - {{$inscription->id}}</h3>
        <form action="{{ route('inscriptions.update', $inscription->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="membre_id" class="text-success">Membre:</label>
                <select class="form-control" name="membre_id">
                    @foreach ($membres as $membre)
                        <option value="{{ $membre->id }}" @if ($membre->id == $inscription->membre_id) selected @endif>{{ $membre->id }} - {{ $membre->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="activite_id" class="text-success">Activite:</label>
                <select class="form-control" name="activite_id">
                    @foreach ($activites as $activite)
                        <option value="{{ $activite->id }}" @if ($activite->id == $inscription->activite_id) selected @endif>{{ $activite->id }} - {{ $activite->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_inscription" class="text-success">Date inscription:</label>
                <input type="date" class="form-control" id="date_inscription" name="date_inscription" placeholder="Date inscription" value="{{ $inscription->date_inscription }}">
            </div>

            <button type="submit" class="btn btn-success w-100">Modifier</button>
        </form>
    </div>

</body>

</html>
    