<aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
            <i class=" ri-home-2-fill"></i>
            <span>Inicio</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('infracciones.index') }}">
            <i class=" ri-pages-line"></i>
            <span>Infracciones</span>
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

        </ul>

    </aside>