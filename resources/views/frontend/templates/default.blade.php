<!DOCTYPE html>
<html lang="en">

<head>
   @include('frontend.templates.partials.head')
</head>

<body>

   {{-- Navigation --}}
   @include('frontend.templates.partials.navigation')

   {{-- Content --}}
   <div class="container">
      @yield('content')
   </div>

   <!-- Compiled and minified JavaScript -->
   @include('frontend.templates.partials.scripts')
   @include('frontend.templates.partials.toast')
</body>

</html>