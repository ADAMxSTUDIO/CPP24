<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container w-50">
        <h3 class="text-center" style="font-size: 3em; font-weight: 700; margin: 20px;">Edit Reservation -
            {{ $reservation->id }}</h3>
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="membre_id" class="text-success">Member:</label>
                <select class="form-control" name="membre_id">
                    @foreach ($membres as $membre)
                        <option value="{{ $membre->id }}" @if ($membre->id == $reservation->membre_id) selected @endif>
                            {{ $membre->id }} - {{ $membre->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="entraineur_id" class="text-success">Trainer:</label>
                <select class="form-control" name="entraineur_id">
                    @foreach ($entraineurs as $entraineur)
                        <option value="{{ $entraineur->id }}" @if ($entraineur->id == $reservation->entraineur_id) selected @endif>
                            {{ $entraineur->id }} - {{ $entraineur->nom }}</option>
                    @endforeach
                </select>
            </div>      
            <div class="form-group">
                <label for="activite_id" class="text-success">Activity:</label>
                <select class="form-control" name="activite_id">
                    @foreach ($activites as $activite)
                        <option value="{{ $activite->id }}" @if ($activite->id == $reservation->activite_id) selected @endif>
                            {{ $activite->id }} - {{ $activite->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_reservation" class="text-success">Reservation Date:</label>
                <input type="date" class="form-control" id="date_reservation" name="date_reservation"
                    placeholder="Reservation Date" value="{{ $reservation->date_reservation }}">
            </div>
            <div class="form-group">
                <label for="details" class="text-success">Details:</label>
                <input type="text" class="form-control" id="details" name="details" placeholder="Details"
                    value="{{ $reservation->details }}">
            </div>
            <button type="submit" class="btn btn-success w-100">Modifier</button>
        </form>
    </div>
