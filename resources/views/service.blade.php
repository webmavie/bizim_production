@extends('layouts.app')
@section('title')
    {{ $service->name }}
@endsection
@section('content')
    <div id="rec142009325" class="r t-rec t-rec_pt_105" style="padding-top: 0px !important;" data-animationappear="off"
        data-record-type="205">
        <!-- cover -->
        <div class="t-cover" id="recorddiv142009325" bgimgfield="img"
            style="height:100vh; background-image:url('{{ asset($service->bg_image) }}');">
            <div class="t-cover__carrier" id="coverCarry142009325" data-content-cover-id="142009325"
                data-content-cover-bg="{{ asset($service->bg_image) }}" data-content-cover-height="100vh"
                data-content-cover-parallax="fixed" style="height:100vh;"></div>
            <div class="t-cover__filter"
                style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#4c000000');">
            </div>
            <div class="t-container">
                <div class="t-width t-width_12" style="margin:0 auto;">
                    <div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index:1;">
                        <div class="t182">
                            <div data-hook-content="covercontent">
                                <div class="t182__wrapper">
                                    <h1 class="t182__title t-title t-title_xl" field="title">
                                        <div style="font-size:102px;" data-customstyle="yes">{{ $service->name }}</div>
                                    </h1>
                                    <div class="t182__buttons"> <a href="{{ route('welcome') . '/#rec205124679' }}"
                                            target="_blank" class="t-btn js-click-stat"
                                            style="color:#ffffff;background-color:#24dff8;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                            <table style="width:100%; height:100%;">
                                                <tr>
                                                    <td>Sifariş et</td>
                                                </tr>
                                            </table>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- arrow -->
            <div class="t-cover__arrow">
                <div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated">
                    <div class="t-cover__arrow_mobile"><svg class="t-cover__arrow-svg" x="0px" y="0px" width="38.417px"
                            height="18.592px" viewBox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;">
                            <g>
                                <path
                                    d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z" />
                            </g>
                        </svg></div>
                </div>
            </div> <!-- arrow -->
        </div>
        <style>
            #rec142009325 .t-btn[data-btneffects-first],
            #rec142009325 .t-btn[data-btneffects-second],
            #rec142009325 .t-submit[data-btneffects-first],
            #rec142009325 .t-submit[data-btneffects-second] {
                position: relative;
                overflow: hidden;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

        </style>
        <script type="text/javascript">
            $(document).ready(function() {});
        </script>
    </div>
    @if ($service->images_exists)
        <div id="rec62915452" class="r t-rec t-rec_pt_30 t-rec_pb_0" style="padding-top:30px;padding-bottom:0px;"
            data-record-type="795" data-bg-color="#eeeeee">
            <!-- T795 -->
            <div class="t795">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_10 t-prefix_1">
                    </div>
                </div>
            </div>
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
                                console.log(imgdiv.offsetWidth);
                                height = this.height * imgdiv.offsetWidth / this.width;
                                imgdiv.style.height = height + 'px';
                            };
                        }
                    </script>
                    @foreach ($service->images as $image)
                        <script>
                            getMeta('{{ asset($image->image) }}', 'slide-image{{ $loop->iteration }}');
                        </script>
                        <div class="t552__tile @if ($service->col4) t552__tile_25 @else t552__tile_33 @endif"
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

            <script>
                $(document).ready(function() {
                    let maxheight = 0;
                    $('.mimgdiv').each(function(index) {
                        if ($(this).height() > maxheight) {
                            maxheight = $(this).height();
                        }
                    });
                    $('.mimgdiv').each(function(index) {
                        $(this).height(maxheight);
                    });
                });
            </script>
        </div>
    @endif
    @if ($service->videos_exists)
        <div id="rec135669612" class="r t-rec t-rec_pt_30 t-rec_pb_30 r_anim r_showed"
            style="padding-top:30px;padding-bottom:30px;" data-record-type="378">
            <!-- T223 -->
            <div class="t223">
                <div class="t-container">
                    @foreach ($service->videos as $video)
                        <div style="margin-top: 2rem;" class="t223-col t-col t-col_6">
                            <div class="t-video-lazyload" data-videolazy-type="vimeo" data-videolazy-id="312314042"
                                data-videolazy-load="true" data-videolazy-height="315" style="height: 315px;">
                                <iframe src="{{ $video->link }}" width="100%" height="315" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    frameborder="0" allowfullscreen data-gtm-yt-inspected-1_19="true"
                                    style="height: 315px;"></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    var div = $("#rec135669612").find(".t-video-lazyload");
                    var iframe = div.find('iframe');
                    var height = div.width() * 0.5625;
                    div.height(height);
                    iframe.height(height);
                    $('.t223').bind('displayChanged', function() {
                        iframe = div.find('iframe');
                        height = div.width() * 0.5625;
                        div.height(height);
                        iframe.height(height);
                    });
                    $(window).bind('scroll', t_throttle(function() {
                        iframe = div.find('iframe');
                        height = div.width() * 0.5625;
                        div.height(height);
                        iframe.height(height);
                    }, 200));
                });
            </script>
        </div>
    @endif
    <div id="rec122139464" class="r t-rec t-rec_pt_90 t-rec_pb_90" style="padding-top:60px;padding-bottom:60px;"
        data-record-type="248">
        <!-- T220 -->
        <div class="t220">
            <div class="t-container">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t220__textwrapper" style="background-color:#f5f5f5;">
                        <div>
                            <div field="text" class="t220__text t-text t-text_md">
                                <div style="font-size:14px;line-height:24px;" data-customstyle="yes">
                                    {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($service->questions_exists)
        <div id="rec148246996" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:75px;padding-bottom:75px;"
            data-animationappear="off" data-record-type="849">
            <!-- t849-->
            <div class="t849">
                <div class="t-container">
                    @if ($questions != null)
                        @foreach ($questions as $item)
                            <div class="t-col t-col_8 t-prefix_2">
                                <div class="t849__accordion" data-accordion="false">
                                    <div class="t849__wrapper">
                                        <div class="t849__header" style=" border-top: 1px solid #eee;">
                                            <div class="t849__title t-name t-name_xl" field="li_title__1531218331971">
                                                {{ $item->question }}<br /></div>
                                            <div class="t849__icon">
                                                <div class="t849__lines"> <svg width="24px" height="24px"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd"
                                                            stroke-linecap="square">
                                                            <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                                                                <path d="M0,11 L22,11"></path>
                                                                <path d="M11,0 L11,22"></path>
                                                            </g>
                                                        </g>
                                                    </svg> </div>
                                                <div class="t849__circle" style="background-color: transparent;"></div>
                                            </div>
                                            <div class="t849__icon t849__icon-hover">
                                                <div class="t849__lines"> <svg width="24px" height="24px"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd"
                                                            stroke-linecap="square">
                                                            <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                                                                <path d="M0,11 L22,11"></path>
                                                                <path d="M11,0 L11,22"></path>
                                                            </g>
                                                        </g>
                                                    </svg> </div>
                                                <div class="t849__circle" style="background-color: #24dff8"></div>
                                            </div>
                                        </div>
                                        <div class="t849__content">
                                            <div class="t849__textwrapper">
                                                <div class="t849__text t-descr t-descr_sm" field="li_descr__1531218331971">
                                                    {{ $item->answer }}<br />
                                                    <ul></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    t849_init('148246996');
                });
            </script>
        </div>
    @endif
    @if ($service->prices_exists)
        <div id="rec62726232" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:60px;padding-bottom:60px;"
            data-animationappear="off" data-record-type="599">
            <!-- T599 -->
            <div class="t599">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs t-animate" data-animate-style="zoomin"
                                data-animate-group="yes" field="btitle">Qiymətlər</div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <style>
                        @media screen and (max-width: 960px) {
                            .t-col {
                                margin-bottom: 1rem !important;
                            }
                        }

                    </style>
                    @foreach ($prices as $key => $item)
                        <div class="t599__col t-col t-col_4 t-align_center">
                            <div class="t599__content"
                                style="border: 1px solid #e0e6ed; background-color: #ffffff; border-radius: 9px;">
                                <div class="t599__title t-name t-name_lg" field="title">
                                    <div style="color:#000000;" data-customstyle="yes"></div>
                                </div>
                                <div class="t599__subtitle t-descr t-descr_xxs" field="subtitle">
                                    <div style="font-size:18px;" data-customstyle="yes">{{ $key }}<br /></div>
                                </div>
                                <div class="t599__price t-title t-title_xs" field="price">
                                    <div style="font-size:36px;" data-customstyle="yes"><span style="font-size: 32px;">
                                            {{ $item }}</span><br /></div>
                                </div> <a href="{{ route('welcome') . '/#rec205124679' }}" target="_blank"
                                    class="t599__btn t-btn t-btn_sm"
                                    style="color:#ffffff;background-color:#24dff8;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td>Sifariş</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t599_init('62726232');
                    }, 500);
                    $(window).bind('resize', t_throttle(function() {
                        t599_init('62726232')
                    }, 250));
                    $('.t599').bind('displayChanged', function() {
                        t599_init('62726232');
                    });
                });
                $(window).load(function() {
                    t599_init('62726232');
                });
            </script>
        </div>
    @endif
    @if ($service->included_in_cost_exists)
        <div id="rec135662932" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:60px;padding-bottom:90px;"
            data-animationappear="off" data-record-type="820">
            <!-- t820 -->
            <div class="t820">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs" field="btitle">Qiymətə daxildir</div>
                        </div>
                    </div>
                </div>
                <div class="t820__container t-container">
                    @foreach ($included_in_cost as $item)
                        <div class="t-col t-col_6 t820__col_first t-item">
                            <div class="t-cell t-valign_middle"> <svg class="t820__checkmark"
                                    style="width:30px; height:30px;" fill="#24dff8" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 31.8 31.8">
                                    <path
                                        d="M.9 14.5C5.2 19.4 9.8 24 14.1 29c.4.5 1.3.3 1.6-.2 5.1-8.4 10.1-16.8 15-25.4.7-1.2-.5-2.1-1.3-.9C19.3 18 19 18.4 13.9 26.7c.5-.1 1.1-.1 1.6-.2-4.4-4.8-8.9-8.6-13.9-12.8-.4-.4-1.1.3-.7.8z" />
                                </svg> </div>
                            <div class="t820__textwrapper t-cell t-valign_middle">
                                <div class="t-name t-name_md" field="li_title__1518168977220">
                                    {{ $item }}
                                </div>
                            </div>
                        </div>
                        @if ($loop->iteration & 2)
                            <div class="t-clear t820__separator"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
