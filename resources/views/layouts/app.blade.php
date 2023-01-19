<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perpustakaan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>
    <div id="app">

        <livewire:peminjam.kategori></livewire:peminjam.kategori>

            <header>
                <div class="jumbotron">
                    <div class="container">
                        <div class="row" style="height:inherit;">
                            <div class="col-lg-5" style="justify-content: center; display:flex; flex-direction:column;">
                                <img src="/adminlte/dist/img/logo.png" alt="logo" width="80" height="80">
                                <h1 style="color: #f5ab35">E-Library</h1>
                                <h3>SMP Negeri 1 Pitumpanua</h3>
                            </div>
                            <div class="col-lg">
                                <img src="https://e-library.stevanandreas.com/imgassets/vector-header.png" alt="Vektor Image" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer id="profil" style=" color:white; ; background-color: darkblue; display:block;">
        <div class="container" style="text-align:center;">
            <div class="profile-content" style="padding: 60px 80px;">
                <h1>
                    <img src="/adminlte/dist/img/logo.png" alt="logo" style="width: 80px; height:80px;">
                </h1>
                <h3 style="font-size: 22px; line-height:22px;">SMP NEGERI 1 PITUMPANUA</h3>
                <ul style="margin: 0; list-style:none; text-align:center;">
                    <li style="color:#a6b5d4; font-size:16px; line-height:22px; padding: 0 0 10px; font-weight:300; position : relative;" >
                        <i class="fa-solid fa-location-dot" style="font-size: 22px; text-align:center; width:20px; position:absolute; left:335;"></i>
                        SIWA, Jln. Pendidikan No.5
                    </li>
                    <li style="color:#a6b5d4; font-size:16px; line-height:22px; padding: 0 0 10px; font-weight:300; position : relative;">
                        <i class="fa-solid fa-phone" style="font-size: 22px; text-align:center; width:20px; position:absolute; left:375;"></i>
                        (0472)321236
                    </li>
                    <li style="color:#a6b5d4; font-size:16px; line-height:22px; padding: 0 0 10px; font-weight:300; position : relative;">
                        <i class="fa-solid fa-envelope" style="font-size: 22px; text-align:center; width:20px; position:absolute; left:290;"></i>
                        SMPN1Pitumpanua.kepeg@gmail.com
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
