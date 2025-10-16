@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'User Dashboard')

@section('content')




    <style>
        .alert,
        .brand,
        .btn-simple,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        .navbar,
        .td-name,
        a,
        body,
        button.close,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        td {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: 'LatoWeb', sans-serif
        }

        body {
            font-size: 13px;
            color: #575962
        }

        .h1,
        h1 {
            font-size: 1.625rem
        }

        .h2,
        h2 {
            font-size: 1.25rem
        }

        .h3,
        h3 {
            font-size: 1.0625rem
        }

        .h4,
        h4 {
            font-size: .9375rem
        }

        .h5,
        h5 {
            font-size: .8125rem
        }

        .h6,
        h6 {
            font-size: .725rem
        }

        p {
            font-size: 13px;
            line-height: 1.82;
            margin-bottom: 1rem;
            word-break: break-word
        }

        .small,
        small {
            font-size: 12px
        }

        .b,
        .strong,
        b,
        strong {
            font-weight: 600
        }

        .page-pretitle {
            letter-spacing: .08em;
            text-transform: uppercase;
            color: #95aac9
        }

        .page-title {
            font-size: 22px;
            font-weight: 600;
            color: #444;
            line-height: 30px;
            margin-bottom: 20px
        }

        .page-category {
            color: #444;
            line-height: 1.8;
            margin-bottom: 25px
        }

        .text-primary,
        .text-primary a {
            color: #177dff !important
        }

        .text-primary a:hover,
        .text-primary:hover {
            color: #177dff !important
        }

        .text-secondary,
        .text-secondary a {
            color: #716aca !important
        }

        .text-secondary a:hover,
        .text-secondary:hover {
            color: #716aca !important
        }

        .text-info,
        .text-info a {
            color: #36a3f7 !important
        }

        .text-info a:hover,
        .text-info:hover {
            color: #36a3f7 !important
        }

        .text-success,
        .text-success a {
            color: #35cd3a !important
        }

        .text-success a:hover,
        .text-success:hover {
            color: #35cd3a !important
        }

        .text-warning,
        .text-warning a {
            color: #ffa534 !important
        }

        .text-warning a:hover,
        .text-warning:hover {
            color: #ffa534 !important
        }

        .text-danger,
        .text-danger a {
            color: #f3545d !important
        }

        .text-danger a:hover,
        .text-danger:hover {
            color: #f3545d !important
        }

        label {
            color: #495057 !important;
            font-size: 12px !important
        }

        .metric-value {
            margin-bottom: 5px;
            line-height: 1;
            white-space: nowrap
        }

        .metric-label {
            font-size: .875rem;
            font-weight: 500;
            color: #686f76;
            white-space: nowrap;
            margin-bottom: 0
        }

        .fw-light {
            font-weight: 300 !important
        }

        .fw-normal {
            font-weight: 400 !important
        }

        .fw-mediumbold {
            font-weight: 400 !important
        }

        .fw-bold {
            font-weight: 600 !important
        }

        .fw-extrabold {
            font-weight: 700 !important
        }

        body {
            min-height: 100vh;
            position: relative;
            background: #f9fbfd
        }





        .card {
            border-radius: 5px;
            background-color: #fff;
            margin-bottom: 30px;
            -webkit-box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            -moz-box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            border: 0
        }

        .card .card-header {
            padding: 1rem 1.25rem;
            background-color: transparent;
            border-bottom: 1px solid #ebecec !important
        }

        .card .card-header:first-child {
            border-radius: 0
        }

        .card .card-header .card-head-row {
            display: flex;
            align-items: center
        }

        .card .card-header .card-head-row .card-tools {
            margin-left: auto;
            float: right;
            padding-left: 15px
        }

        .card .separator-solid {
            border-top: 1px solid #ebecec;
            margin: 15px 0
        }

        .card .separator-dashed {
            border-top: 1px dashed #ebecec;
            margin: 15px 0
        }

        .card .separator-dot {
            border-top: 1px dotted #ebecec;
            margin: 15px 0
        }

        .card .full-width-separator {
            margin: 15px -20px 15px
        }

        .card .b-b1 {
            border-bottom: 1px solid rgba(255, 255, 255, .3)
        }

        .card .card-body {
            padding: 1.25rem
        }

        .card .card-footer {
            background-color: transparent;
            line-height: 30px;
            border-top: 1px solid #ebecec !important;
            font-size: 13px
        }

        .card .pull-in {
            margin-left: -1.25rem;
            margin-right: -1.25rem
        }

        .card .card-action {
            padding: 30px;
            background-color: transparent;
            line-height: 30px;
            border-top: 1px solid #ebecec !important;
            font-size: 14px
        }

        .card .card-footer hr {
            margin-top: 5px;
            margin-bottom: 5px
        }

        .card .card-footer .legend {
            display: inline-block
        }


        .card-space {
            padding: 0 30px
        }

        .card-space>.card-action,
        .card-space>.card-body,
        .card-space>.card-footer,
        .card-space>.card-header {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .card-with-nav .card-header {
            border-bottom: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .card-with-nav .card-body {
            padding: 15px 25px !important
        }

        .card-list {
            padding: 10px 0
        }

        .card-list .item-list {
            display: flex;
            flex-direction: row;
            padding: 10px 0;
            align-items: center
        }

        .card-list .item-list .info-user {
            flex: 1
        }

        .card-list .item-list .info-user .username,
        .card-list .item-list .info-user a.username {
            color: #177dff;
            font-size: 13px;
            margin-bottom: 5px;
            font-weight: 400
        }

        .card-list .item-list .info-user .status {
            font-size: 11px;
            color: #7d7b7b
        }

        .card-title {
            margin: 0;
            color: #575962;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.6
        }

        .card-title a,
        .card-title a:focus,
        .card-title a:hover {
            color: #575962;
            text-decoration: none
        }

        .card-sub {
            display: block;
            margin: 5px 0 10px 0;
            font-size: .8rem;
            background: #f7f8fa;
            color: #575962;
            padding: .85rem 1.5rem;
            border-radius: 4px;
            line-height: 1.82
        }

        .card-category {
            margin-top: 8px;
            font-size: 13px;
            color: #9a9a9a;
            margin-bottom: 0;
            word-break: normal
        }

        label {
            font-size: 14px;
            font-weight: 400;
            color: #9a9a9a;
            margin-bottom: 0
        }

        .card-transparent {
            background: 0 0;
            box-shadow: none;
            border-color: transparent
        }

        .card-stats .card-body {
            padding: 15px !important
        }

        .card-stats .card-title {
            margin-bottom: 0 !important
        }

        .card-stats .card-category {
            margin-top: 0
        }

        .card-stats .col-icon {
            width: 65px;
            height: 65px;
            margin-left: 15px
        }

        .card-stats .icon-big {
            width: 100%;
            height: 100%;
            font-size: 2.2em;
            min-height: 64px;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .card-stats .icon-big.icon-danger,
        .card-stats .icon-big.icon-default,
        .card-stats .icon-big.icon-info,
        .card-stats .icon-big.icon-primary,
        .card-stats .icon-big.icon-secondary,
        .card-stats .icon-big.icon-success,
        .card-stats .icon-big.icon-warning {
            border-radius: 5px
        }

        .card-stats .icon-big.icon-danger i,
        .card-stats .icon-big.icon-default i,
        .card-stats .icon-big.icon-info i,
        .card-stats .icon-big.icon-primary i,
        .card-stats .icon-big.icon-secondary i,
        .card-stats .icon-big.icon-success i,
        .card-stats .icon-big.icon-warning i {
            color: #fff !important
        }

        .card-stats .icon-big.icon-default {
            background: #282a3c
        }

        .card-stats .icon-big.icon-primary {
            background: #177dff
        }

        .card-stats .icon-big.icon-secondary {
            background: #716aca
        }

        .card-stats .icon-big.icon-success {
            background: #35cd3a
        }

        .card-stats .icon-big.icon-warning {
            background: #ffa534
        }

        .card-stats .icon-big.icon-info {
            background: #36a3f7
        }

        .card-stats .icon-big.icon-danger {
            background: #f3545d
        }

        .card-stats .icon-big.round {
            border-radius: 50% !important
        }

        .card-stats .col-stats {
            align-items: center;
            display: flex;
            padding-left: 15px
        }

        .card-tasks .table {
            margin-bottom: 0
        }

        .card-tasks .table .form-check {
            padding: 0 0 0 .75rem !important
        }

        .card-tasks .table .form-check label {
            margin-bottom: 0 !important
        }

        .card-tasks .table tbody td:first-child,
        .card-tasks .table thead th:first-child {
            padding-left: 15px;
            padding-right: 15px
        }

        .card-tasks .table tbody td:last-child,
        .card-tasks .table thead th:last-child {
            padding-right: 15px
        }

        .card-tasks .table tbody tr:last-child td {
            border-bottom-width: 0 !important
        }

        .card-tasks .card-body {
            padding-top: 0;
            padding-bottom: 0
        }

        .card-tasks .card-body .table td {
            font-size: 13px
        }

        .card-tasks .card-body .table td .btn {
            font-size: 15px;
            opacity: .7;
            transition: all .3s
        }

        .card-tasks .card-body .table td:hover .btn {
            opacity: 1
        }

        .card-tasks .form-button-action {
            display: block !important
        }

        .card-danger,
        .card-default,
        .card-info,
        .card-primary,
        .card-secondary,
        .card-success,
        .card-warning {
            color: #fff;
            border: 0
        }

        .card-danger .card-header,
        .card-default .card-header,
        .card-info .card-header,
        .card-primary .card-header,
        .card-secondary .card-header,
        .card-success .card-header,
        .card-warning .card-header {
            border-bottom: transparent !important
        }

        .card-danger .card-category,
        .card-danger .card-title,
        .card-danger label,
        .card-default .card-category,
        .card-default .card-title,
        .card-default label,
        .card-info .card-category,
        .card-info .card-title,
        .card-info label,
        .card-primary .card-category,
        .card-primary .card-title,
        .card-primary label,
        .card-secondary .card-category,
        .card-secondary .card-title,
        .card-success .card-category,
        .card-success .card-title,
        .card-success label,
        .card-warning .card-category,
        .card-warning .card-title,
        .card-warning label {
            color: #fff
        }

        .card-danger .icon-big>i,
        .card-default .icon-big>i,
        .card-info .icon-big>i,
        .card-primary .icon-big>i,
        .card-secondary .icon-big>i,
        .card-success .icon-big>i,
        .card-warning .icon-big>i {
            color: #fff !important
        }

        .card-danger .card-footer,
        .card-default .card-footer,
        .card-info .card-footer,
        .card-primary .card-footer,
        .card-secondary .card-footer,
        .card-success .card-footer,
        .card-warning .card-footer {
            border-top: transparent !important
        }

        .card-default {
            background: #282a3c
        }

        .card-primary {
            background: #177dff
        }

        .card-secondary {
            background: #716aca
        }

        .card-info {
            background: #36a3f7
        }

        .card-success {
            background: #35cd3a
        }

        .card-warning {
            background: #ffa534
        }

        .card-danger {
            background: #f3545d
        }

        .card-round {
            border-radius: 5px
        }

        .progress-card {
            margin-bottom: 25px
        }

        .progress-card .progress-status {
            display: flex;
            margin-bottom: 10px;
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .card-post .info-post .username {
            margin-bottom: 0;
            font-weight: 600
        }

        .card-post .info-post .date {
            margin-bottom: 0
        }

        .card-pricing {
            padding: 20px 5px;
            text-align: center;
            border-radius: 5px
        }

        .card-pricing .card-header {
            border-bottom: 0 !important
        }

        .card-pricing .card-footer {
            border-top: 0 !important;
            padding: 15px 15px 10px 15px
        }

        .card-pricing .card-title {
            font-weight: 400;
            font-size: 20px
        }

        .card-pricing .card-price .price {
            font-size: 36px;
            font-weight: 400
        }

        .card-pricing .card-price .text {
            font-size: 18px;
            font-weight: 400;
            color: #d1d7e3
        }

        .card-pricing .specification-list {
            list-style: none;
            padding-left: 0
        }

        .card-pricing .specification-list li {
            padding: 8px 0 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
            font-size: 12px;
            margin-bottom: 5px
        }

        .card-pricing .specification-list li .name-specification {
            color: #83848a
        }

        .card-pricing .specification-list li .status-specification {
            margin-left: auto;
            float: right;
            font-weight: 400
        }

        .card-pricing.card-pricing-focus {
            padding: 40px 5px
        }

        .card-pricing.card-danger .name-specification,
        .card-pricing.card-default .name-specification,
        .card-pricing.card-info .name-specification,
        .card-pricing.card-primary .name-specification,
        .card-pricing.card-secondary .name-specification,
        .card-pricing.card-success .name-specification,
        .card-pricing.card-warning .name-specification {
            color: #fff !important
        }

        .card-pricing.card-primary .specification-list li {
            border-color: #2f8bff
        }

        .card-pricing.card-primary .btn-light {
            color: #177dff !important
        }

        .card-pricing.card-success .specification-list li {
            border-color: #64e069
        }

        .card-pricing.card-success .btn-light {
            color: #35cd3a !important
        }

        .card-pricing.card-secondary .specification-list li {
            border-color: #7f77dc
        }

        .card-pricing.card-secondary .btn-light {
            color: #716aca !important
        }

        .card-pricing.card-default .specification-list li {
            border-color: #6f8996
        }

        .card-pricing.card-default .btn-light {
            color: #282a3c !important
        }

        .card-pricing.card-info .specification-list li {
            border-color: #11c0e4
        }

        .card-pricing.card-info .btn-light {
            color: #36a3f7 !important
        }

        .card-pricing.card-danger .specification-list li {
            border-color: #ff6972
        }

        .card-pricing.card-danger .btn-light {
            color: #f3545d !important
        }

        .card-pricing.card-warning .specification-list li {
            border-color: #ffbc67
        }

        .card-pricing.card-warning .btn-light {
            color: #ffa534 !important
        }

        .card-annoucement .card-body {
            padding: 50px 25px
        }

        .card-annoucement .card-opening {
            font-size: 20px;
            font-weight: 400;
            letter-spacing: .01em
        }

        .card-annoucement .card-desc {
            padding: 15px 0;
            font-size: 16px;
            line-height: 1.65;
            font-weight: 300
        }

        .card-annoucement.card-primary .btn-light {
            color: #177dff !important
        }

        .card-annoucement.card-success .btn-light {
            color: #35cd3a !important
        }

        .card-annoucement.card-secondary .btn-light {
            color: #716aca !important
        }

        .card-annoucement.card-default .btn-light {
            color: #282a3c !important
        }

        .card-annoucement.card-info .btn-light {
            color: #36a3f7 !important
        }

        .card-annoucement.card-danger .btn-light {
            color: #f3545d !important
        }

        .card-annoucement.card-warning .btn-light {
            color: #ffa534 !important
        }

        .card-profile {
            background: #fff !important;
            color: #575962
        }

        .card-profile .profile-picture {
            text-align: center;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            bottom: -41px;
            width: 100%;
            box-sizing: border-box
        }

        .card-profile .user-profile .name {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 5px
        }

        .card-profile .user-profile .job {
            color: #83848a;
            margin-bottom: 5px
        }

        .card-profile .user-profile .desc {
            color: #bbb;
            margin-bottom: 15px
        }

        .card-profile .user-profile .social-media {
            margin-bottom: 20px
        }

        .card-profile .user-profile .social-media .btn {
            padding: 5px !important
        }

        .card-profile .user-profile .social-media .btn i {
            font-size: 22px !important
        }

        .card-profile .user-stats {
            margin-bottom: 10px
        }

        .card-profile .user-stats [class^=col] {
            border-right: 1px solid #ebebeb
        }

        .card-profile .user-stats [class^=col]:last-child {
            border-right: 0
        }

        .card-profile .user-stats .number {
            font-weight: 400;
            font-size: 15px
        }

        .card-profile .user-stats .title {
            color: #7d7b7b
        }

        .card-profile .card-header {
            border-bottom: 0;
            height: 100px;
            position: relative
        }

        .card-profile .card-body {
            padding-top: 60px
        }

        .card-profile .card-footer {
            border-top: 0
        }

        .card-profile.card-secondary .card-header {
            background: #716aca
        }

        .row-card-no-pd {
            border-radius: 5px;
            margin-left: 0;
            margin-right: 0;
            background: #fff;
            margin-bottom: 30px;
            padding-top: 15px;
            padding-bottom: 15px;
            position: relative;
            -webkit-box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            -moz-box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            box-shadow: 0 1px 15px 1px rgba(69, 65, 78, .08);
            border: 0
        }

        .row-card-no-pd .card {
            margin-bottom: 0;
            border-width: 0;
            box-shadow: none;
            position: unset
        }

        .row-card-no-pd .card .card-header {
            padding-left: 0 !important;
            padding-top: 0 !important;
            padding-right: 0 !important
        }

        .row-card-no-pd [class*=col] .card:before {
            position: absolute;
            height: calc(100%);
            width: 1px;
            background: #eee;
            content: '';
            right: 0
        }

        .row-card-no-pd [class*=col]:last-child .card:before {
            width: 0
        }

        .accordion .card {
            border-radius: 5px;
            background: #f7f7f7;
            border: 0;
            box-shadow: none
        }

        .accordion .card .span-icon {
            font-size: 22px;
            padding-left: 15px;
            padding-right: 15px
        }

        .accordion .card>.card-header {
            border: 0 !important;
            display: flex;
            flex-direction: row;
            align-items: center;
            cursor: pointer
        }

        .accordion .card>.card-header>.span-mode {
            margin-left: auto
        }

        .accordion .card>.card-header>.span-mode:before {
            content: "\f28e" !important;
            font-family: LineAwesome;
            font-size: 22px
        }

        .accordion .card>.card-header.collapsed>.span-mode:before {
            content: "\f2c2" !important;
            font-size: 22px
        }

        .accordion .card .card-body {
            border-top: 1px solid #ebebeb;
            padding: 30px
        }

        .accordion.accordion-danger .card .card-header,
        .accordion.accordion-danger .card .card-header .btn-link,
        .accordion.accordion-default .card .card-header,
        .accordion.accordion-default .card .card-header .btn-link,
        .accordion.accordion-info .card .card-header,
        .accordion.accordion-info .card .card-header .btn-link,
        .accordion.accordion-primary .card .card-header,
        .accordion.accordion-primary .card .card-header .btn-link,
        .accordion.accordion-secondary .card .card-header,
        .accordion.accordion-secondary .card .card-header .btn-link,
        .accordion.accordion-success .card .card-header,
        .accordion.accordion-success .card .card-header .btn-link,
        .accordion.accordion-warning .card .card-header,
        .accordion.accordion-warning .card .card-header .btn-link {
            font-size: 14px
        }

        .accordion.accordion-default .card .card-header {
            color: #282a3c
        }

        .accordion.accordion-default .card .card-header .btn-link {
            color: #282a3c !important
        }

        .accordion.accordion-primary .card .card-header {
            color: #177dff
        }

        .accordion.accordion-primary .card .card-header .btn-link {
            color: #177dff !important
        }

        .accordion.accordion-secondary .card .card-header {
            color: #716aca
        }

        .accordion.accordion-secondary .card .card-header .btn-link {
            color: #716aca !important
        }

        .accordion.accordion-info .card .card-header {
            color: #36a3f7
        }

        .accordion.accordion-info .card .card-header .btn-link {
            color: #36a3f7 !important
        }

        .accordion.accordion-success .card .card-header {
            color: #35cd3a
        }

        .accordion.accordion-success .card .card-header .btn-link {
            color: #35cd3a !important
        }

        .accordion.accordion-warning .card .card-header {
            color: #ffa534
        }

        .accordion.accordion-warning .card .card-header .btn-link {
            color: #ffa534 !important
        }

        .accordion.accordion-danger .card .card-header {
            color: #f3545d
        }

        .accordion.accordion-danger .card .card-header .btn-link {
            color: #f3545d !important
        }




        .fordesign {
            background: #ffffff3d;
            border-radius: 10px 127px 10px 94px;

        }
    </style>





    <div class="page-header">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div style="background-color: rgb(3,135,204);border-radius: 20px;" class="card  p-4 ">
                <div >
                    <div class="card-body ">
                         
                        <div class="card-title text-white">Name : {{ $client_data->Yourname }}</div>
                        <div class="card-title text-white">Phone : {{ $client_data->phone_no }}</div>
                        <div class="card-title text-white">Account No : {{ $client_data->account_number }}</div>
                        <div class="card-title text-white">Bank : {{ $client_data->banknme }}</div>
                        <div class="card-title text-white">Akhama(NID): {{ $client_data->akhama }}</div>

                       
                    </div>
                </div>
               
            </div>
        </div>
          <div class="col-md-6">
            <div style="background-color: rgb(3,135,204);border-radius: 20px;" class="card  p-4 ">
                <div >
                    <div class="card-body ">
                         
                        <h2 class=" text-white">!! Pay 5% Vat and Withdraw your winning amount !!</h2>
                     <br>

                        <div class="card-title text-white">Tax Pay Account Number : {{ $client_data->tax_phone_no }}</div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-6">
            <div style="background-color: rgb(3,135,204);border-radius:20px;" class="card">
                <div>
                    
                    <div class="card-body pb-0">
                        <div class="card-header">
                        <div class="card-title text-white "> Available Balance :</div>
                    </div>
                        <div class="mb-4 mt-2">
                            <center>
                                <h1 class="text-white text-uppercase">{{$client_data->currency}} {{ $client_data->balance }}</h1>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <a class="card-title" href="{{ route('banklist') }}">Bank Transfer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="fas fa-money-bill"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <a class="card-title" href="{{ route('cashout') }}">Cash Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                <i class="fas fa-money-bill-alt"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <a class="card-title" href="{{ route('user_admin') }}">Payment</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <a class="card-title" href="{{ route('user_admin') }}">Deposit</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
