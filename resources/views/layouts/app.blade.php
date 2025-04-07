<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>B-University</title>

    <link rel="stylesheet" href="{{asset('css/output.css')}}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Sertakan jQuery UI CSS dan JS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link Leisure
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="{{ asset('js/script.js')}}" defer></script>
  </head>
  <body class="bg-[#010C0C]">
    @include('partials.navbar')
    @include('partials.sosmed') <!-- Pastikan ada id="social-media" di dalamnya -->
    <div class="mx-200">
      @yield('content')
    </div>
    @include('partials.footer') <!-- Pastikan ada id="footer" di dalamnya -->
  </body>
</html>