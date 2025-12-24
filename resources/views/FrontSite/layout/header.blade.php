<!DOCTYPE html>
<html lang="en">
<link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', env('APP_NAME'))</title>
    <!--Render All Elements Normally-->
    <link rel="stylesheet" href="{{ asset('frontsite/css/normaliz.css') }}">
    <!--Font Awesome Library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--Main Engineering Project Css File-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontsite/css/eng.css') }}">
    <link rel="stylesheet" href="{{ asset('frontsite/css/'.$style) }}">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
</head>
<body>
<div class="header" id="header">
        <div class="container">
            <a href="{{ route('engineers.index') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <nav>
                <i class="fa-solid fa-bars toggle-menu" style="color: #ac4b1c;"></i>
                <ul>
                    <li><a class="{{request()->routeIs('engineers.index') ? 'active':''}}" href="{{ route('engineers.index') }}" >Home</a></li>
                    <li><a class="{{request()->routeIs('engineers.services')?'active':''}}" href="{{ route('engineers.services') }}" >Services</a></li>
                    <li><a class="{{request()->routeIs('engineers.prices')?'active':''}}" href="{{ route('engineers.prices') }}" >Prices</a></li>
                    <li><a class="{{request()->routeIs('engineers.browseProjects')?'active':''}}" href="{{ route('engineers.browseProjects') }}" >Browse Projects</a></li>
                    <li><a class="{{request()->routeIs('engineers.about')?'active':''}}" href="{{ route('engineers.about') }}" >About</a></li>
                    <li><a class="{{request()->routeIs('engineers.contact')?'active':''}}" href="{{ route('engineers.contact') }}" >Contact</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="languageDropdown">
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                            <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
                        </div>
                    </li>
                    <li class="list">
                    <a class="btn-create-account" href="{{ route('engineers.account') }}">Create Account</a>
                    <a class="btn-login" href="{{ route('engineers.account') }}">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
