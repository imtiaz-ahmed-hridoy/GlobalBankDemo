@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'admin panel')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body mt-5">

                <form action=" {{ route('user_update', $user_edit->id) }}
                    "method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $messages)
                            <span class="text-danger">{{ $messages }}</span>
                        @endforeach
                    @endif

                    <div class="row mb-5">


                        <div class="col-md-6">
                            <label class="form-label" for="Yourname">Name :</label>


                            <input value="{{ $user_edit->Yourname }}" class="form-control" name="Yourname" type="text"
                                id="Yourname">


                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="account_number">Account Number :</label>


                            <input value="{{ $user_edit->account_number }}" class="form-control" type="text"
                                name="account_number" id="account_number">


                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="phone_no">Phone No :</label>


                            <input value="{{ $user_edit->phone_no }}" class="form-control" type="text" name="phone_no"
                                id="phone_no">


                        </div>
                        <div class="col-md-6 ">
                            <label class="form-label" for="email">Email :</label>


                            <input  value="{{ $user_edit->email }}"  class="form-control" type="email" name="email" id="email">


                        </div>
                         <div class="col-md-6">
                            <label class="form-label" for="tax_phone_no">Tax Phone No :</label>


                            <input value="{{ $user_edit->tax_phone_no }}" class="form-control" type="text" name="tax_phone_no"
                                id="tax_phone_no">


                        </div>
                        <div class="col-md-6">

                            <label class="form-label" for="password">Password :</label>


                            <input value="{{ $user_edit->password }}" class="form-control" type="text" name="password"
                                id="password">


                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="akhama">Akhama :</label>


                            <input value="{{ $user_edit->akhama }}" class="form-control" type="text" name="akhama"
                                id="akhama">


                        </div>

                              <div class="col-md-6">
                            <label class="form-label" for="banknme">Bank name :</label>


                            <input value="{{ $user_edit->banknme }}" class="form-control" type="text" name="banknme"
                                id="banknme">


                        </div>

                              <div class="col-md-6">
                            <label class="form-label" for="currency">Currency :</label>


                            <input value="{{ $user_edit->currency }}" class="form-control" type="text" name="currency"
                                id="currency">


                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="balance">Balance :</label>


                            <input value="{{ $user_edit->balance }}" class="form-control" name="balance" type="text"
                                id="balance">


                        </div>
                        <div class="col-md-6">

                            <label class="form-label" for="validation_code">Validation Code :</label>


                            <input value="{{ $user_edit->validation_code }}" class="form-control" name="validation_code"
                                type="text" id="validation_code">

                        </div>


                        <div class="col-md-6">
                            <label class="form-label" for="user_img">
                                User Image :
                            </label>
                            <div class=" mt-1">
                                <input class="form-control" type="file" id="user_img" accept=".png,.jpg"
                                    name="user_img">

                            </div>

                        </div>


                    </div>




                    <div style="float: right">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>

                </form>



            </div>
        </div>
    </div>


@endsection
