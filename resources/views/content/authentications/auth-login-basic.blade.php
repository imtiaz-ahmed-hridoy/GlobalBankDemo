@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Login')

@section('content')

<body style="background: radial-gradient(circle, rgba(3,135,204,1) 0%, rgba(9,9,121,1) 77%); min-height: 100vh;">

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5 mx-auto">
                <div class="card shadow-lg">

                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/favicon.png') }}" style="width:150px" alt="Logo">
                        </div>

                        <h4 class="text-center mb-4" style="color: #194a7a">Bangkok Bank</h4>

                        @if (session()->has('session'))
                            <div class="text-success text-center">{{ session()->get('session') }}</div>
                        @endif

                        @if (session('error'))
                            <x-alert :message="session('error')" type="danger" />
                        @endif

                        @if (session('success'))
                            <x-alert :message="session('success')" type="success" />
                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route('loginpost') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <input type="text" class="form-control" name="phone_no" autocomplete="phone_no"
                                    placeholder="Enter Your Phone Number" autofocus>
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" name="password"
                                    autocomplete="current-password" placeholder="Enter Your Password" autofocus>
                            </div>

                            <div class="d-grid gap-3">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a href="{{ route('signup') }}" class="btn btn-secondary text-white text-center">
                                    Click here to Create Account
                                </a>
                            </div>
                        </form>

                        <p class="text-center" style="font-size: 12px;">
                            &copy; 2025. All rights reserved Global Bank of Thailand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
</body>

@endsection
