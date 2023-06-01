<!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/bc6e54b065.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- our project just needs Font Awesome Solid + Brands -->
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <!-- load all Font Awesome v6 styles -->
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">

    <!-- support v4 icon references/syntax -->
    <link href="/your-path-to-fontawesome/css/v4-shims.css" rel="stylesheet">



    <!-- Vendor CSS Files -->
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template') }}/css/main.css" rel="stylesheet">


</head>

<body>

    {{-- Awal Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-info fixed-top">
        @include('layout.navbar')
    </nav>
    {{-- Akhir Navbar --}}

    <div class="container">
        <div class="row">

        <!-- Sidebar Menu -->
            <div class="mt-2">
                <div class="col-3 p-4 " style="margin-left: 110px; margin-top: 150px;">
                    @include('layout.LamarMenu')
                </div>
            </div>
        <!-- /.sidebar-menu -->
    
    
        {{-- Awal Content --}}
                <div class="col-md-6 "  style="margin-top: -300px; margin-left: 550px;">
                    @yield('content')
                </div>
        {{-- Akhir Content --}}

    </div>
    </div>
    


    {{-- <div class="bacground">
      @yield('lowongan')
    </div> --}}
    <footer class="py-5 mt-5">
        @include('layout.footer')
    </footer>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Z+wvq8ZfmWbZJssGDFnS5z5l5N5Wdb+5fkg2Q/LX/5cZLgFVTpGjzeVt/8SKuTw7" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/bc6e54b065.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
