@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Get Transaction')

@section('content')



    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">User Transaction List/</span> Basic
    </h4>

    @if (session()->has('session'))
        <div class="text-success">{{ session()->get('session') }}</div>
    @endif

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>

                        <th colspan="1">User Name</th>
                        <th colspan="1">User ID</th>
                        <th colspan="1">User Account</th>
                        <th colspan="1">User Transaction</th>


                    </tr>
                </thead>
                <tbody>

                    @foreach ($usertr as $usert)
                        <tr>



                            <td colspan="1">{{ $usert->username }}</td>
                            <td colspan="1">{{ $usert->user_id }}</td>
                            <td colspan="1">{{ $usert->useracc }}</td>
                            <td colspan="1">{{ $usert->transactionnum }}</td>


                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>

        <div class="d-flex justify-content-center">
            {{ $usertr->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <!-- Modal to add new record -->

@endsection
