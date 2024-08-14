<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Library CSS -->
        <link rel="stylesheet" href="{{ asset('assets/lib/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap-steps/css/bootstrap-steps.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/lib/datatables/css/datatables.min.css') }}">

        <!--  CSS -->
        @stack('styles')

        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    </head>

    <body>
        <script>0</script>

        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg">
                </div>

                <nav class="navbar navbar-light bg-light p-3">
                    @include('layouts.partials.navbar')
                </nav>

                <div class="container-fluid">
                    <div class="row">
                        <nav class="main-sidebar col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                            @include('layouts.partials.sidebar')
                        </nav>

                        <main class="main-content col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                            <section class="section custom-height">
                                @yield('content')
                            </section>

                            <footer class="main-footer pt-5 d-flex justify-content-between">
                                @include('layouts.partials.footer')
                            </footer>
                        </main>
                    </div>
                </div>
            </div>
        </div>

         <!-- Library JS -->
         <script src="{{ asset('assets/lib/jquery/js/jquery.min.js') }}"></script>
         <script src="{{ asset('assets/lib/jquery.nicescroll/js/jquery.nicescroll.min.js') }}"></script>
         <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
         <script src="{{ asset('assets/lib/datatables/js/datatables.min.js') }}"></script>
         <script src="{{ asset('assets/lib/moment/js/moment.js') }}"></script>

        <!--  JS -->
        @stack('scripts')

         <!-- Template JS File -->
         <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
