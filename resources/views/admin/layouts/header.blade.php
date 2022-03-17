<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Bizim Production - Panel')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('back/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('back/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">
    @yield('css')
    <style>
        @media(max-width: 818px) {
            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }

            .table tr {
                margin-bottom: 2rem;
            }

            .table td {
                text-align: left;
                padding-left: 50%;
                position: relative;
            }

            #tdfoot {
                border-bottom: 2px solid blue;
            }

            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
            }

            .prc {
                display: flex !important;
            }

            .table-bordered td,
            .table-bordered th {
                border: none !important;
            }

            .table td:not(:last-child),
            .table th:not(:last-child) {
                border-top: 0 !important;
                border-bottom: 1px solid #dee2e6 !important;
            }

            .table td:first-child,
            .table th:first-child {
                border-top: 3px solid black !important;
            }

            .table_img {
                width: 180px !important;
                height: 100% !important;
            }

            .desctd {
                width: auto !important;
            }
        }

    </style>
</head>

<body class=" hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('admin.index') }}" class="brand-link">
                <h2>PANEL</h2>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info text-white">
                        <a href="{{ route('edit.password') }}">
                            {{ strtoupper(auth()->user()->name) }}
                        </a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}"
                                class="
                            @if (Request::segment(1) == 'admin' and Request::segment(2) == '') active @endif nav-link">
                                <i class="nav-icon fa fa-info-circle"></i>
                                <p>
                                    Məlumatlar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.slides') }}"
                                class="@if (Request::segment(2) == 'slides') active @endif nav-link">
                                <i class="nav-icon fa fa-image"></i>
                                <p>
                                    Slaydlar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.partners') }}"
                                class="@if (Request::segment(2) == 'partners') active @endif nav-link">
                                <i class="nav-icon fa fa-star"></i>
                                <p>
                                    Partnerlər
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.our-team') }}"
                                class="@if (Request::segment(2) == 'our-team') active @endif nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Komandamız
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.services.list') }}"
                                class="@if (Request::segment(2) == 'services' or Request::segment(2) == 'service' and Request::segment(3) != 'questions') active @endif nav-link">
                                <i class="nav-icon fa fa-camera"></i>
                                <p>
                                    Xidmətlər
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.questions') }}"
                                class="@if (Request::segment(2) == 'service' and Request::segment(3) == 'questions') active @endif nav-link">
                                <i class="nav-icon fa fa-info"></i>
                                <p>
                                    Suallar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.models') }}"
                                class="@if (Request::segment(2) == 'models' or Request::segment(2) == 'model') active @endif nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Modellər
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
