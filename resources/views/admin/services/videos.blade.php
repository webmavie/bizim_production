@extends('admin.layouts.app')
@section('title')
    {{ $service->name }} - Videolar
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $service->name }} - Videolar</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>
                            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
                        </strong>
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-body">
                        <form action="{{ route('admin.service.video.store') }}" method="POST">
                            <input type="hidden" name="service_id" value="{{ $service->id }}">
                            @csrf
                            <div class="row">
                                <style>
                                    .video-container {
                                        position: relative;
                                        padding-bottom: 56.25%; /* 16:9 */
                                        height: 0;
                                    }
                                    .video-container iframe {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                    }
                                </style>
                                    @foreach ($videos as $video)
                                        <div class="col-md-6" style="margin-bottom: 1rem;">
                                            <div class="video-container">
                                            <iframe width="100%" height="100%" src="{{ $video->link }}"
                                                title="video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                            </div>
                                            <a href="{{ route('admin.service.video.delete', $video->id) }}"
                                                class="btn btn-danger btn-sm"
                                                style="position: absolute; top: 44%; right: 7px;"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    @endforeach
                                <div class="input-group col-md-12">
                                    <input type="text" name="link" class="form-control" placeholder="Video linki">
                                    <button type="submit" class="btn btn-success float-right">Əlavə et</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endsection
