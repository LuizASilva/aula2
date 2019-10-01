<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Projeto Aula 2- @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        

        @component('topo')
            @slot('maisinfo')
                @yield('maisinfo')
            @endslot
            <strong> SGG</strong> - Sistema Laravel
        @endcomponent

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')            
        </div>

    </body>
</html>