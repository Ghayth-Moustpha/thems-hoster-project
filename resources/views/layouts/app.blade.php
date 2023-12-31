
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> TempHoster </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--- !--> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel ="stylesheet" href="css/app.css" />
<style >
    .mainboy {
    min-height:  90vh;
}
    </style> 
</head>

<body>
    <div id="app">
    <!-- blade -->  
    @include ("componants.nav") 
    <div class="container p-3 mainboy ">
    @yield('content')
    </div>
        
    
    <footer class="bg-dark text-white text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright: 
    <a class="text-white text-bold" href="">Powerd By : SPU Team  Maya , Maher , Mohammad </a>
  </div>
  <!-- Copyright -->
</footer>
        <div class= "text-center footer " >
<span >  </span> 
 </div> 
         
    </div>
</body>
</html>
