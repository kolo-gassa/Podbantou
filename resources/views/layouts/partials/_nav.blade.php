<nav class="navbar navbar-expand-md navbar-dark bg-dark static-top  ">
      <a class="navbar-brand" href="{{ route('home_path') }}">Podbantou</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('home_path') }}">
              Accueil 
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Langues</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Lingala</a>
              <a class="dropdown-item" href="#">Wolof</a>
              <a class="dropdown-item" href="#">Kirundi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about_path') }}">A propos de nous</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="recherche" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
</nav>