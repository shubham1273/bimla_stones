<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
      @yield('title')
  </title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-small.png') }}" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/scss/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/about-us.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/blog.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/career.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/contact-us.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/gallery.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/home.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/process.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/scss/product.css') }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  {{-- @if(Route::currentRouteName() === 'home')
      @include('website_partials.header_home')
  @elseif(Route::currentRouteName() === 'contact_us')
      @include('website_partials.header_contact')
  @elseif(Route::currentRouteName() === 'career')
      @include('website_partials.header_career')
  @else
      @include('website_partials.header_common')
  @endif --}}
  
  @include('website_partials.header_common')
  
  @yield('content')
  
  @include('website_partials.footer')
</body>
</html>