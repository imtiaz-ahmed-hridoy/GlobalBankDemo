@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Send Transaction')

@section('content')

 <div class="container">
        <div class="card">
            <div class="card-body mt-5">
                <form action="{{ route('send_transaction') }}
                    "method="POST"
                    enctype="multipart/form-data">
                    @csrf


                    @if ($errors->any())
                        @foreach ($errors->all() as $messages)
                            <span class="text-danger">{{ $messages }}</span>
                        @endforeach
                    @endif

                    @if (session('error'))
                        <x-alert :message="session('error')" type="danger" />
                    @endif
                    @if (session('success'))
                        <x-alert :message="session('success')" type="success" />
                    @endif


                    <div class="row mb-5">


                        <div >
                            <label class="form-label" for="transactionnum">Transaction Number:</label>


                            <input class="form-control" name="transactionnum" type="text" id="transactionnum">


                        </div>

                    </div>
                    <div style="float: right">
                        {{-- <style>button[data-action="submit"] {
                        background-color: green;
                        color: white;
                        }</style> --}}
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection

