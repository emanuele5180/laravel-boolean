<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My First Bootcamp</title>


    <style media="screen">
      * {
        margin: 0;
        pading:0;
        box-sizing:border-box;
      }

      body{
        width: 100vw;
        height: 100vh;
        background: blue;
        color: white;
      }

      .container {
        display:flex;

        width:100%;
        height:100%;
      }

      .container >*{
        margin: auto;
      }
    </style>

  </head>
  <body>
    <div class="container">
      <h1>
        <!-- hello world!!! -->
        @php
         echo $hello
        @endphp

        {{$hello}}

      </h1>

    </div>

  </body>
</html>
