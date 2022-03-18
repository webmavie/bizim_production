@extends('admin.layouts.app')
@section('title')
    {{ $model->name }} - Düzəliş et
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $model->name }} - Düzəliş et</h1>
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
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-body">
                        <form action="{{ route('admin.model.update') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <input type="hidden" value="{{ $model->id }}" name="id">
                                <div class="col-md-12" data-select2-id="29">
                                    <div class="form-group">
                                        <label>Ad</label>
                                        <input class="form-control" value="{{ $model->name }}" type="text" name="name">
                                    </div>
                                </div>
                                <div id="imgdiv" class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp">Əsas Şəkil</label>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div
                                            style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                            <img style="object-fit: cover; border-radius: 10px" alt="Əsas Şəkil"
                                                src="{{ asset($model->main_image) }}" height="300px" width="100%"
                                                id="img">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp" type="file" name="main_image">
                                        </span>
                                    </div>
                                </div>
                                <div id="imgdiv1" class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp1">Səhifə Şəkli</label>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div
                                            style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                            <img style="object-fit: cover; border-radius: 10px" alt="Səhifə Şəkil"
                                                src="{{ asset($model->image) }}" height="300px" width="100%" id="img1">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp1" type="file" name="image">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label class="col-md-12 text-center d-flex justify-content-center">
                                        Şəkil sırala (4)&nbsp;
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="col4"
                                                @if ($model->col4 == 1) checked @endif
                                                class="custom-control-input" id="col4">
                                            <label class="custom-control-label" for="col4"></label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">Saxla</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@section('js')
    <script>
        imgInp = document.getElementById('ImgInp');
        img = document.getElementById('img');
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                img.src = URL.createObjectURL(file);
            }
        }
        imgInp1 = document.getElementById('ImgInp1');
        img1 = document.getElementById('img1');
        imgInp1.onchange = evt => {
            const [file] = imgInp1.files
            if (file) {
                img1.src = URL.createObjectURL(file);
            }
        }
    </script>
@endsection
@endsection
