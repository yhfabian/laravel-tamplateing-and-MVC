<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

  <!-- Vendor CSS -->
  <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

@include('landingpage.partials.header')

<main class="main">

@yield('content')

</main>

@include('landingpage.partials.footer')

<!-- Vendor JS -->

<script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>

<script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

</body>

</html>
