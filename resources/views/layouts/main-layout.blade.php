<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My First Project</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">



  </head>

  <body>
    <div class="container">
      @include('partials.header')
      @include('partials.main')      



      @include('partials.footer')

    </div>

  </body>
</html>
