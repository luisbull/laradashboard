<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

  <title>@yield('title')</title>
  <!-- favicon -->
  <!-- styles -->
  <style>
    .active {
      color: red;
    }
  </style>

</head>
<body>

  <!-- header -->
  <!-- nav -->
  @include('layouts.partials.header')

  @yield('content')

  <!-- footer -->
  @include('layouts.partials.footer')
  
  <!-- script -->
  
</body>
</html>