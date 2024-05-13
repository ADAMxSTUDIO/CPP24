<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Sport Club</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('membres.index') }}">Members</a>
          <a class="nav-link" href="{{ route('entraineurs.index') }}">Tainers</a>
          <a class="nav-link" href="{{ route('activites.index') }}">Activity</a>
          <a class="nav-link" href="{{ route('inscriptions.index') }}">Inscription</a>
          <a class="nav-link" href="{{ route('reservations.index') }}">Reservation</a>
        </div>
      </div>
    </div>
  </nav>