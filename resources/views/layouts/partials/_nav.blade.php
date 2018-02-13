<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home_path') }}">{{config('app.name')}}</a>
      <a class="navbar-brand {{ set_active_route('home_path') }}" href="{{ route('home_path') }}">
        Accueil
      </a>
      <a class="navbar-brand" href="#">Langues</a>
      <a class="navbar-brand {{ set_active_route('about_path') }}" href="{{ route('about_path') }}">
        A propos de {{config('app.name')}}
      </a>
      <a class="navbar-brand {{ set_active_route('contact_path') }}" href="{{ route('contact_path') }}">
        Contact
      </a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" placeholder="recherche" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Rechercher</button>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</nav>