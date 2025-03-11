<!DOCTYPE html>
<html lang="en">
<head>
  <title>TANSEN AUTOWERKS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('app.css  ') }}">

</head>
<body class="bg-black">
    
  @include('base.header') 

  @yield('content')

  @include('base.footer') 
</body>
</html>
