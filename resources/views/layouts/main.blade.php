    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('titulo')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('recursos/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('recursos/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.gstatic.com" rel="preconnect"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('recursos/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('recursos/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
    {{-- Iconos de font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('recursos/assets/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

    <!-- ======= Header ======= -->
    @include('shared.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('shared.aside')
    <!-- End Sidebar-->

    @yield('contenido')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('shared.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('recursos/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('recursos/assets/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('recursos/assets/js/main.js') }}"></script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            let tables = document.querySelectorAll('.datatable');
            tables.forEach(function(table) {
                new simpleDatatables.DataTable(table);
            });
        });
    </script> --}}
    @stack('scripts')

    </body>

    </html>