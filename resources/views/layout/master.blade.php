<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">
  <head>
    @include('layout.partials.head')
</head>
<body>
  <!-- navigation -->
<header class="navigation fixed-top">
    @include('layout.partials.header')
</header>
<!-- /navigation -->


@yield('content')


<!-- start of footer -->
<footer class="footer">
    @include('layout.partials.footer')
  </footer>
<!-- end of footer -->



{{-- Js --}}
@include('layout.partials.js')
</html>
