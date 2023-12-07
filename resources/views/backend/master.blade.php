<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        @include('backend.includes.style')
    </head>
    <body class="sb-nav-fixed">
    {{-- header start --}}
    @include('backend.includes.navbar')
    {{-- header end --}}
            <!-- Navbar-->
            @include('backend.includes.header')
           {{-- Navbar end --}}
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                {{-- side bar start --}}
                @include('backend.includes.sidebar')
                {{-- sidebar end --}}
            </div>
            {{-- main start --}}
                @yield('content')
            {{-- main end --}}
        </div>
                {{-- footer start --}}
                @include('backend.includes.fotter')
                {{-- footer end --}}
       
     {{-- script start --}}
        @include('backend.includes.script')
     {{-- script end --}}
    </body>
</html>
