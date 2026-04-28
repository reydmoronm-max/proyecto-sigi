    <header style="background-color: #032263;" id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <i style="color: white;" class="bi bi-list toggle-sidebar-btn"></i>
                &nbsp;&nbsp;&nbsp;
                <img style="width: 36px;" src="{{ asset('recursos/assets/img/logo.png') }}" alt="">
                &nbsp;&nbsp;
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <span style="font-size: 22px; color: white; white-space: nowrap;" class="d-none d-lg-block">Sistema de Gestión de Infracciones</span>
                </a>
            </div><!-- End Logo -->


            <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                <a style="color: white;" class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    {{-- <img src="{{ asset('recursos/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle"> --}}
                    <span class="d-none d-md-block dropdown-toggle ps-2"><i class=" ri-settings-3-fill"></i></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->rol }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Salir</span>
                        </a>
                    </li>

                </ul>
                </li>

            </ul>
            </nav>

        </header>