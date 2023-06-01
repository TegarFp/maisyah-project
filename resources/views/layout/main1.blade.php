<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{ asset('template') }}/css/bootstrap.min.css"  rel="stylesheet">
  <link href="{{ asset('template') }}/css/style.css"  rel="stylesheet">
  <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('template') }}/css/main.css" rel="stylesheet">


  </head>
  <body>

    {{-- Awal Navbar 1 --}}
    <div class="login">
      @yield('login')
    </div>
    {{-- Akhir Navbar 1 --}}
    
    {{-- Awal Navbar 2 --}}
    <div class="register">
      @yield('register')
    </div>
    {{-- Akhir Navbar 2 --}}
    
    {{-- Awal Navbar 3 --}}
    <div class="verifikasi">
      @yield('verif')
    </div>
    {{-- Akhir Navbar 3 --}}

    {{-- <div class="footers position-sticky">
      @include('layout.footer')
    </div> --}}
      
  



  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/bc6e54b065.js" crossorigin="anonymous"></script>
</body>
</html>