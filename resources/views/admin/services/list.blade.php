@extends('admin.layouts.app')
@section('title', 'Xidmətlər')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Xidmətlər
                            <a href="{{ route('admin.service.create') }}" class="btn btn-success float-right">Yeni</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">#</th>
                                <th>Şəkil</th>
                                <th>Ad</th>
                                <th>Əsas Açıqlama</th>
                                <th>Prc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td data-label="#" class="align-middle">{{ $service->id }}</td>
                                    <td data-label="Şəkil" style="width: 200px" class="align-middle">
                                        <a target="_blank" href="{{ asset($service->main_image) }}">
                                            <img class="table_img" style="width: 100%; height: auto" src="{{ asset($service->main_image) }}"
                                                alt="{{ $service->name }}">
                                        </a>
                                    </td>
                                    <td data-label="Ad" class="align-middle">{{ $service->name }}</td>
                                    <td class="desctd" data-label="Əsas Açıqlama" style="width: 500px; overflow: visible; height: auto;" class="align-middle">{{ $service->main_description }}</td>
                                    <td data-label="Prc" class="align-middle">
                                        <div class="prc"
                                            style="height: 100%; gap: 5px; display: grid; justify-content: center; align-services:center;">
                                            @if ($service->images_exists)
                                                <a class="btn btn-primary" title="Şəkillər"
                                                    href="{{ route('admin.service.images', $service->id) }}">
                                                    <i class="fa fa-image"></i>
                                                </a>
                                            @endif
                                            @if ($service->videos_exists)
                                                <a class="btn btn-info" title="Videolar"
                                                    href="{{ route('admin.service.videos', $service->id) }}">
                                                    <i class="fa fa-video"></i>
                                                </a>
                                            @endif
                                            <a class="btn btn-success" title="Düzəliş et"
                                                href="{{ route('admin.service.edit', $service->id) }}">
                                                <i class="fa fa-outdent"></i>
                                            </a>
                                            <a title="Sil" href="{{ route('admin.service.delete', $service->id) }}"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $services->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
