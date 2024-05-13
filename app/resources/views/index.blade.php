<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding-top: 50px;
            padding-bottom: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #dc3545;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #dc3545;
            color: white;
            font-weight: bold;
        }
        .card-body {
            background-color: #f8d7da;
            color: #721c24;
        }
        .alert-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .alert-danger svg {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <div class="ml-3">
                PAST EVENTS, NEED TO TAKE ACTION NOW!
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Reservations</h2>
                @forelse ($passedReservations as $reservation)
                    <div class="card">
                        <div class="card-header">
                            Reservation ID: {{ $reservation->id }}
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Date:</strong> {{ $reservation->date_reservation }}<br>
                                <strong>Member:</strong> {{ $reservation->membre->nom }}<br>
                                <strong>Trainer:</strong> {{ $reservation->entraineur->nom }}<br>
                                <strong>Activity:</strong> {{ $reservation->activite->nom }}<br>
                                <strong>Details:</strong> {{ $reservation->details }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning" role="alert">
                        No passed reservations
                    </div>
                @endforelse
            </div>
            <div class="col-md-6">
                <h2>Inscriptions</h2>
                @forelse ($passedInscriptions as $inscription)
                    <div class="card">
                        <div class="card-header">
                            Inscription ID: {{ $inscription->id }}
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Date:</strong> {{ $inscription->date_inscription }}<br>
                                <strong>Member:</strong> {{ $inscription->membre->nom }}<br>
                                <strong>Activity:</strong> {{ $inscription->activite->nom }}<br>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning" role="alert">
                        No passed inscriptions
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</body>
</html>
