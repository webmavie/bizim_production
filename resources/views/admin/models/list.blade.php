@extends('admin.layouts.app')
@section('title', 'Modellər')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0">Modellər
                            <a href="{{ route('admin.model.create') }}" class="btn btn-success float-right">Yeni</a>
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
                                <th>Əsas Şəkil</th>
                                <th>Səhifə Şəkli</th>
                                <th>Ad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $model)
                                <tr>
                                    <td data-label="#" class="align-middle">{{ $model->id }}</td>
                                    <td data-label="Əsas Şəkil" style="width: 150px" class="align-middle">
                                        <a target="_blank" href="{{ asset($model->main_image) }}">
                                            <img class="table_img" style="width: 100%; height: auto"
                                                src="{{ asset($model->main_image) }}" alt="{{ $model->name }}">
                                        </a>
                                    </td>
                                    <td data-label="Səhifə Şəkli" style="width: 150px" class="align-middle">
                                        <a target="_blank" href="{{ asset($model->image) }}">
                                            <img class="table_img" style="width: 100%; height: auto"
                                                src="{{ asset($model->image) }}" alt="{{ $model->name }}">
                                        </a>
                                    </td>
                                    <td data-label="Ad" class="align-middle">
                                        {{ $model->name }}
                                    </td>
                                    <td data-label="Prc" class="align-middle">
                                        <div class="prc"
                                            style="height: 100%; gap: 5px; display: grid; justify-content: center; align-services:center;">
                                            <a class="btn btn-primary" title="Şəkillər"
                                                href="{{ route('admin.model.images', $model->id) }}">
                                                <i class="fa fa-image"></i>
                                            </a>
                                            <a class="btn btn-success" title="Düzəliş et"
                                                href="{{ route('admin.model.edit', $model->id) }}">
                                                <i class="fa fa-outdent"></i>
                                            </a>
                                            <a title="Sil" href="{{ route('admin.model.delete', $model->id) }}"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $models->links() }}
                </div>
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
                        <form action="{{ route('admin.model_info.update') }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-12" data-select2-id="29">
                                    <div class="form-group">
                                        <label>Başlıq</label>
                                        <textarea id="summernote" class="form-control" name="model_title" cols="30"
                                            rows="5">{{ $info->model_title }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-switch col-md-6">
                                            <input type="checkbox" @if ($info->models == 1) checked @endif
                                                name="models" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">Modelləri
                                                göstər</label>
                                        </div>
                                    </div>
                                    <div class="d-flex form-group col-md-12 justify-content-center">
                                        <div
                                            style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                            <img style="object-fit: cover; border-radius: 10px"
                                                src="{{ asset($info->model_image) }}" class="img-fluid"
                                                alt="ModelImage" style="object-fit: cover" width="450px" height="auto"
                                                id="img">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp" type="file" name="model_image">
                                        </span>
                                    </div>
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
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 150,
            });
        });
    </script>
@endsection
@endsection
