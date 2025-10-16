@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Play Game')

@section('content')

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Game List/</span> Basic
    </h4>

    @if (session()->has('session'))
        <div class="text-success">{{ session()->get('session') }}</div>
    @endif

   @auth
    <a class="btn btn-primary mb-3" href="{{ route('create_play_game', Auth::id()) }}">
        Create Game
    </a>
    
    @endauth
   <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>

                        <th colspan="1">Game Number</th>
                        <th colspan="1">Game Amount</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($game_details as $game_detail)
                        @if ($game_detail->visually === 'show')
                            <tr>
                                <td colspan="1">{{ $game_detail->gamnum }}</td>
                                <td class="text-uppercase" colspan="1">{{ $game_detail->gamamount }}  {{ Auth::user()->currency }}</td>
                            </tr>
                        @endif
                    @endforeach


                </tbody>
            </table>


        </div>

        <div class="d-flex">
            {!! $game_details->links('pagination::bootstrap-5') !!}
        </div>
    </div>
    <!-- Modal to add new record -->


@endsection
