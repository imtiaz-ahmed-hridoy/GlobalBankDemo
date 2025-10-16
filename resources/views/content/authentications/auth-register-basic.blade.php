<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset(mix('assets/img/favicon.png')) }}">
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
    <!-- Include Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />





</head>

<body style="background-color: rgb(5, 21, 79)">

    <main>

        <div class="container">
            
                <div class="mt-5 authentication-wrapper authentication-basic container-p-y"
                    style=" display: flex;
                    align-items: center;
                    justify-content: center;">

<!-- Login -->



<div class="card  " >
    <div class="card-body">
        
        
        
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
          
            
             
                    @if ($errors->any())
                        @foreach ($errors->all() as $messages)
                            <p class="text-danger text-center">{{ $messages }}</p>
                        @endforeach
                    @endif

            <h2 class="text-center text-info text-capitalize">Create your new  Account</h2>
            <p class="text-center text-secondary">Please fill in this form to create an account</p>

            
<hr>
                     @if (session()->has('success'))
        <div class="alert text-center alert-success">{{ session()->get('success') }}</div>
        @endif            
                                <div class="row mb-5">
                                    

                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="Yourname">Name :</label>


                            <input class="form-control" name="Yourname" type="text" id="Yourname">


                        </div>

                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="account_number">Account Number :</label>


                            <input class="form-control " type="text" name="account_number" id="account_number">


                        </div>

                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="phone_no">Phone No :</label>


                            <input class="form-control" type="text" name="phone_no" id="phone_no">


                        </div>
                          <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="email">Email :</label>


                            <input class="form-control" type="email" name="email" id="email">


                        </div>
                        <!-- <div class="col-md-6 mt-3">
                            <label class="form-label" for="tax_phone_no">Tax Phone No :</label>


                            <input class="form-control" type="text" name="tax_phone_no" id="tax_phone_no">


                        </div> -->
                        <div class="col-md-6 mt-3">

                            <label class="form-label text-secondary" for="password">Password :</label>


                            <input class="form-control" type="text" name="password" id="password">


                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="akhama">Akhama :</label>


                            <input class="form-control" type="text" name="akhama" id="akhama">


                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="banknme">Bank name :</label>


                            <input class="form-control" type="text" name="banknme" id="banknme">


                        </div>
                            <!-- <div class="col-md-6 mt-3">
                            <label class="form-label" for="currency">Currency :</label>


                            <input class="form-control" type="text" name="currency" id="currency">


                        </div> -->

                        <!-- <div class="col-md-6 mt-3">
                            <label class="form-label" for="balance">Balance :</label>


                            <input class="form-control" name="balance" type="number" id="balance">


                        </div> -->
                        <!-- <div class="col-md-6 mt-3">

                            <label class="form-label" for="validation_code">Validation Code :</label>


                            <input class="form-control" name="validation_code" type="text" id="validation_code">

                        </div> -->


                        <div class="col-md-6 mt-3">
                            <label class="form-label text-secondary" for="user_img">
                                User Image :
                            </label>
                            <div class=" mt-1">
                                <input class="form-control" type="file" id="user_img" accept=".png,.jpg"
                                    name="user_img">

                            </div>

                        </div>


                    </div>

                                <div style="float: left">

                                    <a class="btn btn-secondary "href="{{ route('login') }}">Login</a>

                                </div>

                                <div style="float: right">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>

                            </form>











                        </div>

                    </div>
                </div>
            
        </div>

    </main>



    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>








</body>

</html> -}}
