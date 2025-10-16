<!DOCTYPE html>

<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
    class="{{ $configData['style'] }}-style {{ $navbarFixed ?? '' }} {{ $menuFixed ?? '' }} {{ $menuCollapsed ?? '' }} {{ $footerFixed ?? '' }} {{ $customizerHidden ?? '' }}"
    dir="{{ $configData['textDirection'] }}" data-theme="{{ $configData['theme'] }}"
    data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{ url('/') }}" data-framework="laravel"
    data-template="{{ $configData['layout'] . '-menu-' . $configData['theme'] . '-' . $configData['style'] }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>
    <meta name="description"
        content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords"
        content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    {{-- font awsom icon --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Michroma&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    <!-- Include Styles -->
    @include('layouts/sections/styles')






    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')
</head>

<body>
        @auth
    <!-- Awareness Marquee -->
    <div class="marquee-container">
        <div class="marquee">
            <marquee behavior="scroll" direction="left" scrollamount="5">
                🚨 Welcome ! &nbsp; Pay 5% Vat and Withdraw your winning amount &nbsp; 🚨
            </marquee>
        </div>
    </div>

    <style>
        .marquee-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #0387CC;
            overflow: hidden;
            z-index: 1050;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .marquee {
            flex: 1;
            display: inline-block;
        }

        marquee {
            width: 100%;
            white-space: nowrap;
            color: #fff;
            font-size: 0.9rem;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
        }

        @media screen and (max-width: 768px) {
            marquee {
                font-size: 0.8rem;
            }
        }

        @media screen and (max-width: 480px) {
            marquee {
                font-size: 0.75rem;
            }
        }

        body {
            padding-top: 40px;
        }
    </style>
    @endauth


    @if (session()->has('session'))
        <div class="alert alert-success">{{ session()->get('session') }}</div>
    @endif

    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    @include('layouts/sections/scripts')

    {{-- sweet alart --}}


</body>

</html>
