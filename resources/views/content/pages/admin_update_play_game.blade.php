@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Update Game')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body mt-5">
                <form action="{{ route('update_play_game_key', $user_edit->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    @if (session('error'))
                        <x-alert :message="session('error')" type="danger" />
                    @endif
                    @if (session('success'))
                        <x-alert :message="session('success')" type="success" />
                    @endif
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <label class="form-label" for="gamnum">Game Number :</label>
                            <input value="{{ $game_key->gamnum }}" class="form-control" name="gamnum" type="text"
                                id="gamnum">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="gamamount">Game Amount :</label>
                            <input value="{{ $game_key->gamamount }}" class="form-control" name="gamamount" type="number"
                                id="gamamount">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Show / Hidden">Show / Hidden</label>
                            <select name="visually" id="Show / Hidden" class="select2 form-select" data-allow-clear="true">

                                <option value="">Select Bank
                                </option>
                                <option {{ $game_key->visually === 'show' ? 'selected' : '' }} value="show">Show</option>
                                <option {{ $game_key->visually === 'hidden' ? 'selected' : '' }} value="hidden">Hidden</option>
                            </select>
                        </div>
                    </div>
                    <div style="float: right">
                        <button data-action="submit" class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
