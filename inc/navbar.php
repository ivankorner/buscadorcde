<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
  <div class="container-fluid">
    <div class="row w-100">

      <div class="col-6 d-flex align-items-center">
        <a class="navbar-brand" href="index.php?vista=home">
          <img src="./img/logo.png" alt="Bootstrap" width="75" height="27">
        </a>
        <div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?vista=user_new">Nuevo</a></li>
              <li><a class="dropdown-item" href="index.php?vista=user_list">Listado</a></li>
              <li><a class="dropdown-item" href="index.php?vista=user_search">Buscar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Instrumento
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../vistas/instrumento_nuevo.php">Nuevo</a></li>
              <li><a class="dropdown-item" href="#">Listado</a></li>
              <li><a class="dropdown-item" href="#">Categorías</a></li>
              <li><a class="dropdown-item" href="#">Buscar</a></li>
            </ul>
          </li>
        </ul>
        </div>
        
      </div>

      



      <div class="col-6 d-flex justify-content-end">
      <button type="button" class="btn btn-warning">Mi Cuenta</button>
      </div>
    </div>
  </div>
</nav>