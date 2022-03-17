@extends('admin.layouts.app')
@section('title')
    {{$service->name}} - Şəkillər
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$service->name}} - Şəkillər</h1>
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
                        <form action="{{route('admin.service.image.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <input type="hidden" name="service_id" value="{{$service->id}}">
                                    @foreach ($images as $img)
                                        <div class="col-6 col-md-4" style="margin-bottom: 1rem;">
                                            <a href="{{$img->image}}" target="_blank">
                                                <div style="height: 100%; padding: 5px; border-style: dashed; border-radius: 5px">
                                                    <img style="margin-bottom: 1rem; object-fit: cover; border-radius: 5px"
                                                        src="{{ asset($img->image) }}" alt="Slide" width="100%" height="100%">
                                                        <a href="{{route('admin.service.image.delete', $img->id)}}"
                                                            class="btn btn-danger btn-sm"
                                                            style="position: absolute; top: 0; right: 7px;"><i
                                                            class="fa fa-trash"></i></a>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                <div class="form-group col-md-12 d-flex justify-content-center">
                                    <span class="btn btn-primary btn-file mx-auto">
                                        Şəkillər yüklə<input id="file-input" type="file" name="images[]" multiple>
                                    </span>
                                </div>
                                <div class="form-group col-md-12 d-flex justify-content-center">
                                    <div class="col-md-12" id="preview"></div>
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
            function previewImages() {

                var preview = document.querySelector('#preview');

                if (this.files) {
                    [].forEach.call(this.files, readAndPreview);
                }

                function readAndPreview(file) {

                    // Make sure `file.name` matches our extensions criteria
                    if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                        return alert(file.name + " is not an image");
                    } // else...

                    var reader = new FileReader();

                    reader.addEventListener("load", function() {
                        var image = new Image();
                        image.height = 100;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild(image);
                    });

                    reader.readAsDataURL(file);

                }

            }

            document.querySelector('#file-input').addEventListener("change", previewImages);
        </script>
    @endsection
@endsection
