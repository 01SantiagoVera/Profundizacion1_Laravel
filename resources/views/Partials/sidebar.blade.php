<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline bi bi-diagram-3-fill "> Practic-os</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li>
                <a href="{{ route('empresa.index') }}" class="nav-link px-0 align-middle text-white">
                    <i class="fs-4 bi-people text-white"></i>
                    <span class="ms-1 d-none d-sm-inline text-white">Empresas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('empresa.index') }}" class="nav-link px-0 align-middle text-white">
                    <i class="fs-4 bi-backpack text-white"></i>
                    <span class="ms-1 d-none d-sm-inline text-white">Estudiantes</span>
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i>
                <span class="d-none d-sm-inline mx-1">Usuario</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Salir</a></li>
            </ul>
        </div>
    </div>
</div>