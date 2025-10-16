@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts.layoutMaster')

@section('title', 'Get Game')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body mt-5">
                <form action="{{ route('create_play_game', $user_edit->id) }}
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


                        <div class="col-md-6">
                            <label class="form-label" for="gamnum">Game Number:</label>


                            <input class="form-control" name="gamnum" type="text" id="gamnum">


                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="gamamount">Game Amount:</label>


                            <input class="form-control" name="gamamount" type="number" id="gamamount">


                        </div>

                        

                        <div class="col-md-6">
                            <label class="form-label" for="Show / Hidden">Show / Hidden</label>
                            <select name="visually" id="Show / Hidden" class="select2 form-select" data-allow-clear="true">

                                <option value="">Select Bank
                                </option>
                                <option value="show">Show</option>
                                <option value="hidden">Hidden</option>
                            </select>
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
