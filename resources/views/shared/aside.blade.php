<aside style="background-color: #d8e4ff" id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('home') }}">
            <i class=" ri-home-2-fill"></i>
            <span>Inicio</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('infracciones.index') }}">
            <i class="ri-traffic-light-fill"></i>
            <span>Infraccion</span>
            </a>
        </li><!-- End Infracciones Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('oficiales.index') }}">
            <i class=" ri-user-star-line"></i>
            <span>Oficiales</span>
            </a>
        </li><!-- End Oficiales Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('tipos_infracciones.index') }}">
            <i class=" ri-file-list-line"></i>
            <span>Tipos de Infracciones</span>
            </a>
        </li><!-- End Tipos Infracciones Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('consultas.index') }}">
                <i class="ri-search-eye-line"></i>
                <span>Consultas</span>
            </a>
        </li><!-- End Consultas Page Nav -->
        
        </ul>

    </aside>