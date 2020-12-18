 <!--codigo-->
 <nav class="navbar navbar-expand navbar-light bg-info">
            <a class="navbar-brand" href="{{url('/')}}"><p class="text-white">Hotel La Rivera</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hotel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Misión y visión</a>
                    <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicación</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                    <a class="dropdown-item" href="{{url('/servicios/eventos')}}">Eventos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/clientes/visualizar')}}">Visualizar</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/reservas')}}"><p class="text-white">Reservas</p> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/facturacion')}}"><p class="text-white">Facturacion</p> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contactenos')}}"><p class="text-white">Contactos</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/consulta')}}"><p class="text-white">Consultas</p></a>
                </li>
                </ul>
            </div>
            </nav>
           
          <!--end-->
