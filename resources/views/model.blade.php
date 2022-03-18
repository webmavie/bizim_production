@extends('layouts.app')
@section('title')
    {{ $model->name }}
@endsection
@section('content')
    <div id="rec171517134" class="r t-rec t-rec_pt_135 t-rec_pb_45" style="padding-top:135px;padding-bottom:45px;"
        data-animationappear="off" data-record-type="814">
        <!-- t814 -->
        <div class="t814">
            <div class="t-container">
                <div class="t814__top t-col t-col_5">
                    <div class="t814__blocktext-wrapper" style="height: 550.986px;">
                        <div class="t814__blocktext t-align_left"
                            style="background-color: rgb(239, 239, 239); left: 0px; height: 409px;">
                            <div class="t814__content t-valign_middle">
                                <div class="t814__box">
                                    <div class="t814__title t-title t-title_xs" field="title" style="color:#000000;">
                                        {{ $model->name }}
                                    </div>
                                    <div class="t814__btn-container">
                                        <div class="t814__btn-wrapper">
                                            <a href="#rec205124679" class="t-btn"
                                                style="color:#ffffff;background-color:#24dff8;border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;">
                                                <table style="width:100%; height:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sifariş</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-col t-col_7">
                    <div class="t814__blockimg-wrapper" style="padding-bottom:75.757575757576%;">
                        <div class="t814__blockimg t-bgimg loaded" bgimgfield="img"
                            style="background-image: url({{ asset($model->image) }});">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                t814_init('171517134');
            });
        </script>
    </div>
    <div id="rec87760438" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;"
        data-record-type="552" data-bg-color="#eeeeee">
        <!-- t552-->
        <div class="t552">
            <div class="t552__container t-container">
                <script>
                    function getMeta(url, index) {
                        let img = new Image();
                        img.src = url;
                        img.divid = index;
                        img.onload = function() {
                            let imgdiv = document.getElementById(this.divid);
                            height = this.height * imgdiv.offsetWidth / this.width;
                            imgdiv.style.height = height + 'px';
                        };
                    }
                </script>
                @foreach ($model->images as $image)
                    <script>
                        getMeta('{{ asset($image->image) }}', 'slide-image{{ $loop->iteration }}');
                    </script>
                    <div class="t552__tile @if ($model->col4) t552__tile_25 @else t552__tile_33 @endif"
                        itemscope itemtype="http://schema.org/ImageObject">
                        <div id="slide-image{{ $loop->iteration }}" class="mimgdiv t552__blockimg_animated"
                            data-zoom-target="{{ $loop->iteration }}" data-zoomable="yes"
                            data-img-zoom-url="{{ asset($image->image) }}"
                            style="width: 100%; background: url({{ asset($image->image) }}) center center no-repeat; background-size:cover;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    t552_init('87760438', '1.33');
                }, 500);
            });
            $('.t552').bind('displayChanged', function() {
                t552_init('87760438', '1.33');
            });
        </script>
    </div>
@section('js')
    <script>
        let maxheight = 0;
        $('.mimgdiv').each(function(index) {
            if ($(this).height() > maxheight) {
                maxheight = $(this).height();
            }
        });
        $('.mimgdiv').each(function(index) {
            $(this).height(maxheight);
        });
    </script>
@endsection
@endsection
