@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'List')

@section('content')



    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">User List/</span> Basic
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
                        <th colspan="1">User Image</th>
                        <th colspan="1">User Account Number</th>
                        <th colspan="1">User Phone No</th>
                        <th colspan="1">User password</th>
                        <th colspan="1">User validation code</th>
                        <th colspan="1">User Create Game</th>
                        <th colspan="1">User Update Game</th>
                        <th colspan="1">User edit</th>

                        <th colspan="1">User Delete</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($user_details as $user_detail)
                        <tr>




                            <td>{{ $user_detail->Yourname }}</td>

                            </td>
                            <td colspan="1">

                                <div class="avatar-wrapper">
                                    <div class="avatar me-2">
                                        <a href="{{ route('admin_user_edit', $user_detail->id) }}">
                                            <img src="{{ '/user_img/' . $user_detail->user_img }}"
                                                alt="{{ $user_detail->Yourname }}" class="rounded-circle"></a>
                                    </div>
                                </div>

                            </td>
                            <td colspan="1">{{ $user_detail->account_number }}</td>
                            <td colspan="1">{{ $user_detail->phone_no }}</td>

                            <td colspan="1">{{ $user_detail->password }}</td>

                            <td colspan="1">{{ $user_detail->validation_code }}</td>



                            <td colspan="1">

                                <a class="btn btn-primary" href="{{ route('create_play_game', $user_detail->id) }}">Create
                                    Game</a>

                            </td>
                            <td colspan="1">

                                <a class="btn btn-primary" href="{{ route('update_play_game', $user_detail->id) }}">Update
                                    Game</a>

                            </td>



                            <td colspan="1">

                                <a class="btn btn-primary" href="{{ route('admin_user_edit', $user_detail->id) }}">User
                                    Edit</a>

                            </td>
                            <td colspan="1">
                                <form action="{{ route('user_destroy', $user_detail->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-primary" type="submit">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>

        <div class="d-flex">
            {!! $user_details->links('pagination::bootstrap-5') !!}
        </div>
    </div>
    <!-- Modal to add new record -->




@endsection
