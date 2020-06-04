      <!doctype html>
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>{{ config('app.name', 'NorthenGreen') }}</title>

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
          

          <!-- Fonts -->
          <link rel="dns-prefetch" href="//fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

          <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <link href="{{ asset('images/app.images') }}" >
          <style>
            body{
            /* /// background-image: url('{{ asset('images/contruction1.jpg')}}'); */
              /* background-color:#ecc19c; */
              margin:0%;
              padding: 5%;

            }
          
          </style>
           {{-- style="background-color:#a43820" --}}
          
      </head>
      <body  class="p-3 mb-2 " style="background-color:#34675c" >
        

        <div  class="container" style="background-color:#fff">
        <header class="row">
                @include('layouts.navbar')
          </header>
        
        
               @yield('content')
           
           <footer class="row">
                @include('layouts.footer')
                
            </footer>

        </div>
        
      </body>
      </html>
