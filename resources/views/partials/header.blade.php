<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $item)
              <li><a class="dropdown-item" href="{{ url($item['url']) }}">{{ $item['name'] }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            @foreach($brands as $item)
              <li><a class="dropdown-item" href="{{ url($item['url']) }}">{{ $item['name'] }}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
    </div>
    
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>

    <ul class="navbar-nav me-2">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Cuenta
        </a>
        <ul class="dropdown-menu">
          @foreach($session as $item)
            <li><a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
          @endforeach
        </ul>
      </li>
    </ul>
    <a href="/car_shop/my_car"><i class="bi bi-cart"></i></a>
  </div>
</nav>