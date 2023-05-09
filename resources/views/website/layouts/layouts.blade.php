<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @include('website.include.head')
</head>
<body>
    <header>
        <nav>
           @include('website.include.nav')

        </nav>
    @include('website.include.header')
    </header>
    <section>
        @yield('content')
    </section>

    <footer>
    @include('website.include.footer')
    </footer>

    
    <script src="{{ asset('js/about.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
        <!-- for services js-->

    <script src="{{ asset('bootstrap.min.js') }}"></script>
    <script src="{{ asset('jquery.min.js') }}"></script>
    <script src="{{ asset('wow.min.js') }}"></script>
    
    <!-- bootstrab5.3 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


            <!-- for connect js-->

    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" > </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>