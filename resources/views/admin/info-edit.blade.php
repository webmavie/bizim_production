@extends('admin.layouts.app')
@section('title', 'Məlumatlar')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Məlumatlar</h1>
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
                        <form action="{{ route('admin.info.update') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-6" data-select2-id="29">
                                    <div class="form-group">
                                        <label>Başlıq</label>
                                        <input class="form-control" value="{{ $info->title }}" type="text" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" value="{{ $info->phone }}" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6" data-select2-id="29">
                                    <div class="form-group">
                                        <label>Email adresi</label>
                                        <input class="form-control" value="{{ $info->email }}" type="email"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Adres</label>
                                        <input class="form-control" value="{{ $info->address }}" type="text"
                                            name="address">
                                    </div>
                                </div>
                                <div class="col-md-6" data-select2-id="29">
                                    <div class="form-group">
                                        <label>WhatsApp nömrəsi</label>
                                        <input class="form-control" value="{{ $info->whatsapp }}" type="text"
                                            name="whatsapp">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12 text-white">.</label>
                                        <div class="custom-control custom-switch col-md-6">
                                            <input type="checkbox" @if ($info->partners == 1) checked @endif
                                                name="partners" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">Partnerləri
                                                göstər</label>
                                        </div>
                                        <div class="custom-control custom-switch col-md-6">
                                            <input type="checkbox" @if ($info->our_team == 1) checked @endif
                                                name="our_team" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2">Komandamızı
                                                göstər</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-select2-id="29">
                                    <div class="form-group">
                                        <label>İnstagram</label>
                                        <input class="form-control" value="{{ $info->instagram }}" type="text"
                                            name="instagram">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input class="form-control" value="{{ $info->facebook }}" type="text"
                                            name="facebook">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Haqqımızda</label>
                                    <textarea id="summernote" name="about">{{ $info->about }}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Sayt Açıqlaması</label>
                                    <textarea name="site_description" class="form-control">{{ $info->site_description }}</textarea>
                                </div>
                                <div id="imgdiv" class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp">Haqqımızda - Arxaplan</label>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div
                                            style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                            <a href="{{ $info->about_image }}" target="_blank">
                                                <img style="object-fit: cover; border-radius: 10px"
                                                    alt="Haqqımızda - Arxaplan" src="{{ asset($info->about_image) }}"
                                                    height="300px" width="100%" id="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp" type="file" name="about_image">
                                        </span>
                                    </div>
                                </div>
                                <div id="imgdiv1" class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp1">Mobil Şəkil</label>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div
                                            style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                            <a href="{{ $info->mobile_image }}" target="_blank">
                                                <img style="object-fit: cover; border-radius: 10px" alt="Mobil Şəkil"
                                                    src="{{ asset($info->mobile_image) }}" height="300px" width="100%"
                                                    id="img1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp1" type="file" name="mobile_image">
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
        imgInp1 = document.getElementById('ImgInp1');
        img1 = document.getElementById('img1');
        imgInp1.onchange = evt => {
            const [file] = imgInp1.files
            if (file) {
                img1.src = URL.createObjectURL(file);
            }
        }
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 240,
            });
        });
    </script>
@endsection
@endsection
