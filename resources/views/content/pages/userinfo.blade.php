@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'User Dashboard')

@section('content')
<div class="card card-profile card-secondary">
  <div class="card-header" style="background-color:#6088a1">
     <div class="profile-picture">
        <div style="
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;">
           <img  src="/user_img/{{ $client_data->user_img }}" style="height: 250px; width:250px" class="rounded-circle">
        </div>
     </div>
  </div>
  <div class="card-body pt-2">
     <div class="user-profile text-center">
       <div class="job">User</div>
        <div class="name">{{$client_data->Yourname  }}</div>
        <div class="job">{{$client_data->phone_no  }}</div>
     </div>
  </div>
</div>

@endsection
