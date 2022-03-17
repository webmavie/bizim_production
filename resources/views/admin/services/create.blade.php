@extends('admin.layouts.app')
@section('title')
    Servis əlavə et
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Servis əlavə et</h1>
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
                        <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label>Ad</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Əsas Açıqlama</label>
                                    <input class="form-control" type="text" name="main_description">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Açıqlama</label>
                                    <textarea id="summernote" name="description"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp">Əsas Şəkil</label>
                                    <div id="imgpreview" style="display: none"
                                        class="col-md-12 d-flex justify-content-center">
                                        <div id="imgdiv">
                                            <img style="object-fit: cover; border-radius: 10px" width="100%" id="img">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp" type="file" name="main_image">
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-md-12 text-center" for="ImgInp1">Arxaplan</label>
                                    <div id="imgpreview1" style="display: none"
                                        class="col-md-12 d-flex justify-content-center">
                                        <div id="imgdiv1">
                                            <img style="object-fit: cover; border-radius: 10px" width="100%" id="img1">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 col-md-12 d-flex justify-content-center">
                                        <span class="btn btn-primary btn-file mx-auto">
                                            Şəkil seç<input id="ImgInp1" type="file" name="bg_image">
                                        </span>
                                    </div>
                                </div>
                                <div style="display: inline-flex; align-items: flex-start" class="form-group row mt-3">
                                    <div class="row col-md-6 mt-4">
                                        <style>
                                            .chosen-container {
                                                font-size: 16px !important;
                                            }

                                            .chosen-choices {
                                                background-color: #fff !important;
                                                background-clip: padding-box !important;
                                                border: 1px solid #ced4da !important;
                                                border-radius: 0.25rem !important;
                                            }

                                        </style>
                                        <label class="col-md-12 text-center d-flex justify-content-center">
                                            Suallar&nbsp;
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="questions_exists" checked
                                                    class="custom-control-input" id="customSwitches">
                                                <label class="custom-control-label" for="customSwitches"></label>
                                            </div>
                                        </label>
                                        <select style="height: 100%" id="question_select" class="chosen-select col-md-12"
                                            data-placeholder="Sualları seç..." multiple name="questions[]">
                                            <option value=""></option>
                                            @foreach ($questions as $key => $q)
                                                <option value="{{ $q->id }}">{{ $q->question }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="costs col-md-6 mt-4">
                                        <input type="hidden" name="included_in_cost" id="json_costs">
                                        <label class="col-md-12 text-center d-flex justify-content-center">
                                            Qiymətlə daxildir&nbsp;
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="included_in_cost_exists" checked
                                                    class="custom-control-input" id="customSwitches2">
                                                <label class="custom-control-label" for="customSwitches2"></label>
                                            </div>
                                        </label>
                                        <style>
                                            .cost {
                                                margin-top: 2px;
                                            }

                                        </style>
                                        <div class="cost input-group">
                                            <input type="text" class="costinp form-control"
                                                placeholder="Qiymətlə daxildir..." aria-label="Qiymətlə daxildir...">
                                            <button type="button" id="addcost"
                                                class="input-group-text btn btn-success btn-sm">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="prices col-md-12 mt-4">
                                        <input id="json_prices" value="" name="prices" type="hidden">
                                        <label class="col-md-12 text-center d-flex justify-content-center">
                                            Qiymətlər&nbsp;
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="prices_exists" checked
                                                    class="custom-control-input" id="customSwitches1">
                                                <label class="custom-control-label" for="customSwitches1"></label>
                                            </div>
                                        </label>
                                        <style>
                                            .price {
                                                margin-top: 2px;
                                            }

                                        </style>
                                        <div class="price input-group">
                                            <input type="text" class="condinp form-control" placeholder="Say"
                                                aria-label="Say">
                                            <input type="text" class="priceinp form-control" placeholder="Qiymət"
                                                aria-label="Qiymət">
                                            <button type="button" id="addprice"
                                                class="addprice input-group-text btn btn-success btn-sm">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row col-md-6 mt-4">
                                        <label class="col-md-12 text-center d-flex justify-content-center">
                                            Şəkillər&nbsp;
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="images_exists" checked
                                                    class="custom-control-input" id="images_exists">
                                                <label class="custom-control-label" for="images_exists"></label>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="costs col-md-6 mt-4">
                                        <label class="col-md-12 text-center d-flex justify-content-center">
                                            Videolar&nbsp;
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="videos_exists" class="custom-control-input"
                                                    id="videos_exists">
                                                <label class="custom-control-label" for="videos_exists"></label>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" onclick="Submit()" class="btn btn-success float-right">Saxla</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @section('css')
        <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
    @endsection
    @section('js')
        <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
        <script>
            function Submit() {
                let priceinps = document.getElementsByClassName('priceinp');
                let condinps = document.getElementsByClassName('condinp');
                let pricearray = {};
                for (let index = 0; index < priceinps.length; index++) {
                    if (condinps[index].value != '' && priceinps[index].value != '') {
                        pricearray[condinps[index].value] = priceinps[index].value;
                    }
                }
                if (Object.keys(pricearray).length !== 0) {
                    $("#json_prices").val(JSON.stringify(pricearray));
                }

                let costs = document.getElementsByClassName('costinp');
                let costarray = {};
                for (let index = 0; index < costs.length; index++) {
                    if (costs[index].value != '') {
                        costarray[index] = costs[index].value;
                    }
                }
                if (Object.keys(costarray).length !== 0) {
                    $("#json_costs").val(JSON.stringify(costarray));
                }
            }

            function deletePrice(index) {
                $("#addprice" + index).parent().remove();
            }

            function deleteCost(index) {
                $("#addcost" + index).parent().remove();
            }
            $(function() {
                $("#addprice").click(function() {
                    let i = document.getElementsByClassName('price').length;
                    i++;
                    $(".prices").append('\
                                                    <div class="price input-group">\
                                                        <input type="text" class="condinp form-control" placeholder="Say" aria-label="Say">\
                                                        <input type="text" class="priceinp form-control" placeholder="Qiymət" aria-label="Qiymət">\
                                                        <button type="button" onclick="deletePrice(' + i + ')" id="addprice' +
                        i + '" class="input-group-text btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>\
                                                    </div>\
                                                    ');
                });
                $("#addcost").click(function() {
                    let i = document.getElementsByClassName('cost').length;
                    i++;
                    $(".costs").append('\
                                                    <div class="cost input-group">\
                                                        <input type="text" class="costinp form-control" placeholder="Qiymətlə daxildir..." aria-label="Qiymətlə daxildir...">\
                                                        <button type="button" onclick="deletePrice(' + i + ')" id="addprice' +
                        i + '" class="input-group-text btn btn-danger btn-sm"><i class="fa fa-minus"></i></button>\
                                                    </div>\
                                                    ');
                });
            });
        </script>
        <script>
            $(".chosen-select").chosen({
                no_results_text: "Sual tapılmadı"
            });
            imgInp = document.getElementById('ImgInp');
            img = document.getElementById('img');
            imgInp.onchange = evt => {
                const [file] = imgInp.files;
                const imgdiv = document.getElementById('imgdiv');
                const imgpreview = document.getElementById('imgpreview');
                if (file) {
                    img.src = URL.createObjectURL(file);
                    img.style.height = '300px';
                    imgdiv.style.display = 'inline';
                    imgdiv.style.padding = '5px';
                    imgdiv.style.borderStyle = 'dashed';
                    imgdiv.style.borderRadius = '15px';
                    imgpreview.style.display = 'block';
                }
            }
            imgInp1 = document.getElementById('ImgInp1');
            img1 = document.getElementById('img1');
            imgInp1.onchange = evt => {
                const [file] = imgInp1.files;
                const imgdiv1 = document.getElementById('imgdiv1');
                const imgpreview1 = document.getElementById('imgpreview1');
                if (file) {
                    img1.src = URL.createObjectURL(file);
                    img1.style.height = '300px';
                    imgdiv1.style.display = 'inline';
                    imgdiv1.style.padding = '5px';
                    imgdiv1.style.borderStyle = 'dashed';
                    imgdiv1.style.borderRadius = '15px';
                    imgpreview1.style.display = 'block';
                }
            }
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 220,
                });
            });
        </script>
    @endsection
@endsection
