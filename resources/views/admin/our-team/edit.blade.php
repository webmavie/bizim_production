@extends('admin.layouts.app')
@section('title', 'Komandamız - düzəliş et')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Komanda üzvünə düzəliş et</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <strong>
                            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
                        </strong>
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-body">
                        <form action="{{ route('admin.our-team.update', $member->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label>Ad</label>
                                    <input class="form-control" value="{{ $member->name }}" type="text" name="name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Vəzifə</label>
                                    <input class="form-control" value="{{ $member->position }}" type="text"
                                        name="position">
                                </div>
                                <div id="imgdiv" class="d-flex form-group col-md-12 justify-content-center">
                                    <div style="display: inline; padding: 5px; border-style: dashed; border-radius: 15px">
                                        <img src="{{ asset($member->image) }}" class="img-fluid"
                                            alt="{{ $member->name }}" style="object-fit: cover" width="300px"
                                            height="auto" id="img">
                                    </div>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-center">
                                    <span class="btn btn-primary btn-file mx-auto">
                                        Şəkil seç<input id="ImgInp" type="file" name="image">
                                    </span>
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
        </script>
    @endsection
@endsection
