@extends('layouts.app')
@section('title', 'Bizim Production')
@section('content')
    <div id="rec160317730" class="r t-rec t-screenmax-640px" data-animationappear="off" data-record-type="396"
        data-screen-max="640px">
        <!-- T396 -->
        <style>
            @media screen and (max-width: 800px) {
                #rec160317730 {
                    display: block !important;
                }
            }

            #rec160317730 .t396__artboard {
                min-height: 550px;
                height: 100vh;
                background-color: #ffffff;
            }

            #rec160317730 .t396__filter {
                min-height: 550px;
                height: 100vh;
            }

            #rec160317730 .t396__carrier {
                min-height: 550px;
                height: 100vh;
                background-position: center center;
                background-attachment: scroll;
                background-image: url({{ $setting->mobile_image }});
                background-size: cover;
                background-repeat: no-repeat;
            }

            @media screen and (max-width: 1199px) {
                #rec160317730 .t396__artboard {}

                #rec160317730 .t396__filter {}

                #rec160317730 .t396__carrier {
                    background-attachment: scroll;
                }
            }

            @media screen and (max-width: 959px) {}

            @media screen and (max-width: 639px) {}

            @media screen and (max-width: 479px) {
                #rec160317730 .t396__artboard {}

                #rec160317730 .t396__filter {}

                #rec160317730 .t396__carrier {
                    background-image: url({{ $setting->mobile_image }});
                }
            }

            #rec160317730 .tn-elem[data-elem-id="1580923904217"] {
                color: #ffffff;
                text-align: center;
                z-index: 1;
                top: calc(50vh - 275px + 510px);
                left: calc(50% - 600px + 490px);
                width: 200px;
                height: 55px;
            }

            #rec160317730 .tn-elem[data-elem-id="1580923904217"] .tn-atom {
                color: #ffffff;
                font-size: 14px;
                font-family: 'Arial', Arial, sans-serif;
                line-height: 1.55;
                font-weight: 600;
                border-width: 1px;
                border-radius: 30px;
                background-color: #000000;
                background-position: center center;
                border-color: transparent;
                border-style: solid;
                transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
            }

            @media screen and (max-width: 1199px) {}

            @media screen and (max-width: 959px) {}

            @media screen and (max-width: 639px) {}

            @media screen and (max-width: 479px) {
                #rec160317730 .tn-elem[data-elem-id="1580923904217"] {
                    top: calc(50vh - 275px + 85px);
                    left: calc(50% - 160px + 80px);
                    width: 170px;
                }

                #rec160317730 .tn-elem[data-elem-id="1580923904217"] .tn-atom {
                    background-color: #24dff8;
                    border-radius: 2px;
                }
            }

            .centered {
                width: 100%;
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

        </style>
        <div class="t396 t396_safari">
            <div class="t396__artboard rendered" data-artboard-recid="160317730" data-artboard-height="550"
                data-artboard-height_vh="100" data-artboard-valign="center" data-artboard-proxy-min-offset-top="93.0"
                data-artboard-proxy-min-height="550" data-artboard-proxy-max-height="736" style="height: 736px;">
                <div class="t396__carrier" data-artboard-recid="160317730" style="height: 736px;"></div>
                <div class="t396__filter" data-artboard-recid="160317730" style="height: 736px;"></div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                t396_init('160317730');
            });
        </script><!-- /T396 -->
        <style>
            @media only screen and (min-width:1366px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) {
                .t396__carrier {
                    background-attachment: scroll !important;
                }
            }

        </style>
    </div>
    <div id="rec205110593" class="r t-rec t-rec_pt_0 t-screenmin-640px" style="padding-top: 0px; background-color: #ffffff"
        data-animationappear="off" data-record-type="675" data-screen-min="640px" data-bg-color="#ffffff">
        <!-- t675 -->
        <div class="t675" style="height:120vh;">
            <div class="t-slds">
                <div class="t-container_100 t-slds__main">
                    <div class="t-slds__container">
                        <div class="t-slds__items-wrapper t-slds_animated-none" data-slider-transition="300"
                            data-slider-correct-height="false" data-auto-correct-mobile-width="false"
                            data-slider-initialized="false" data-slider-totalslides="3" data-slider-pos="1"
                            data-slider-curr-pos="1" data-slider-cycle="yes"
                            style="width: 8550px; height: 782px; transform: translateX(-950px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            @foreach ($slideimages as $slide)
                                <div class="t-slds__item t-slds__item-loaded @if ($loop->iteration == 1) t-slds__item_active t-slds__item-loaded @endif"
                                    data-slide-index="{{ $loop->iteration }}" itemtype="http://schema.org/ImageObject"
                                    style="width: 950px; opacity: 1;">
                                    <div class="t-slds__wrapper t-align_center t-slds__bgimg t-bgimg loaded"
                                        data-original="{{ $slide->image }}"
                                        style="height: 120vh; background-image: url(&quot;{{ $slide->image }}&quot;);">
                                        <div class="t675__wrapper"
                                            style="background-image: -moz-linear-gradient(top, rgba(), rgba()); background-image: -webkit-linear-gradient(top, rgba(), rgba()); background-image: -o-linear-gradient(top, rgba(), rgba()); background-image: -ms-linear-gradient(top, rgba(), rgba());">
                                            <div class="t-container">
                                                <div class="t675__textwrapper t-col t-col_6 t-prefix_3 t-align_center"
                                                    style="margin-bottom: 69px;">
                                                    <div class="t675__title t-name t-name_sm"
                                                        field="li_title__1548022398682" itemprop="name"
                                                        style="padding-bottom:300px;opacity:0.80;">
                                                        <div style="font-size:30px;" data-customstyle="yes"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="t-slds__arrow_container">
                            <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left"
                                style="height: 782px;">
                                <div class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg"
                                    style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                                    <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 7px;">
                                        <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <desc>Left</desc>
                                            <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                                stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5">
                                            </polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right"
                                style="height: 782px;">
                                <div class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg"
                                    style="width: 30px; height: 30px;background-color: rgba(255,255,255,1);">
                                    <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 7px;">
                                        <svg style="display: block" viewBox="0 0 7.3 13" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <desc>Right</desc>
                                            <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                                stroke-linecap="butt" stroke-width="1" points="0.5,0.5 6.5,6.5 0.5,12.5">
                                            </polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__bullet_wrapper">
                            @foreach ($slideimages as $slide)
                                <div class="t-slds__bullet @if ($loop->iteration == 1) t-slds__bullet_active @endif"
                                    data-slide-bullet-for="{{ $loop->iteration }}">
                                    <div class="t-slds__bullet_body"
                                        style="width: 10px; height: 10px;background-color: #24dff8;border: 2px solid #ffffff;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($setting->title != null)
        <div id="rec101938072" class="r t-rec t-rec_pb_75 r_showed r_anim" style="padding-top: 30px; padding-bottom: 75px"
            data-record-type="23">
            <!-- T006 -->
            <div class="t006">
                <div class="t-container">
                    <div class="t-row">
                        <div class="t-col t-col_12">
                            <div class="t006__line_top"></div>
                        </div>
                    </div>
                    <div class="t-row">
                        <div class="t-col t-col_12">
                            <div>
                                <div class="t006__text-impact t-text-impact t-text-impact_md" style="padding-top: 25px"
                                    field="text">
                                    <strong>{{ $setting->title }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-row">
                        <div class="t-col t-col_12">
                            <div class="t006__line_bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #rec101938072 .t006__line_top {
                    border-top: 0px solid;
                }

                #rec101938072 .t006__line_bottom {
                    border-top: 1px solid;
                }

            </style>
        </div>
    @endif
    <script type="text/javascript">
        $(document).ready(function() {
            t_onFuncLoad("t_sldsInit", function() {
                t_sldsInit("205110593");
            });
            t675_init("205110593");
        });
        $(".t675").bind("displayChanged", function() {
            t_onFuncLoad("t_slds_updateSlider", function() {
                t_slds_updateSlider("205110593");
            });
        });
    </script>
    <style type="text/css">
        @media screen and (max-width: 800px) {
            #rec205110593 {
                display: none !important;
            }
        }

        #rec205110593 .t-slds__bullet_active .t-slds__bullet_body {
            background-color: #ffffff !important;
        }

        #rec205110593 .t-slds__bullet:hover .t-slds__bullet_body {
            background-color: #ffffff !important;
        }

    </style>
    </div>
    <div id="rec101938074" class="r t-rec t-rec_pb_45" style="padding-top: 30px; padding-bottom: 45px"
        data-animationappear="off" data-record-type="772">
        <!-- T772 -->
        <div class="t772">
            <div class="t772__wrapper t772__container_mobile-grid">
                <style>
                    @media screen and (max-width: 960px) {
                        .t772__col {
                            margin-bottom: 60px;
                        }
                    }

                    a {
                        color: #24dff8;
                        text-decoration: none;
                    }

                </style>
                @foreach ($services as $service)
                    <div class="t772__col t-col t-col_4 t-align_left t-item t772__col_mobile-grid t-animate t-animate__chain_first-in-row t-animate_started"
                        data-animate-style="fadein" data-animate-chain="yes" data-animate-start-time="1646399168244"
                        style="transition-delay: 0s;"> <a href="{{ route('service', $service->slug) }}">
                            <div class="t772__content">
                                <div class="t772__imgwrapper" style="padding-bottom:94.444444444444%;">
                                    <div class="t772__bgimg t-bgimg loaded" bgimgfield="li_img__1495010928665"
                                        data-original="{{ $service->main_image }}"
                                        style="background-image: url(&quot;{{ $service->main_image }}&quot;);"
                                        itemtype="http://schema.org/ImageObject">
                                    </div>
                                </div>
                                <div class="t772__textwrapper">
                                    <div class="t772__title t-name t-name_md" field="li_title__1495010928665">
                                        <strong>{{ $service->name }}</strong>
                                    </div>
                                    <div class="t772__descr t-descr t-descr_xxs" field="li_descr__1495010928665">
                                        {{ $service->main_description }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="t772__btn-wrapper">
                            <a href="{{ route('service', $service->slug) }}" class="t772__btn t772__btn t-btn t-btn_sm"
                                style="color:#ffffff;background-color:#24dff8;border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;">
                                <table style="width:100%; height:100%;">
                                    <tbody>
                                        <tr>
                                            <td>Ətraflı</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                t772_init("101938074");
            });
        </script>
    </div>
    <div id="rec101938075" class="r t-rec" data-animationappear="off" data-record-type="476">
        <!-- T476 -->
        <!-- cover -->
        <div class="t-cover" id="recorddiv101938075" bgimgfield="img"
            style="height: 100vh; background-image: url({{ $setting->about_image }});">
            <div class="t-cover__carrier loaded" id="coverCarry101938075" data-content-cover-id="101938075"
                data-content-cover-bg="{{ $setting->about_image }}" data-content-cover-height="100vh"
                data-content-cover-parallax="fixed"
                style="height: 100vh; background-image: url({{ $setting->about_image }});">
            </div>
            <div class="t476">
                <div class="t-container">
                    <div class="t476__col t-width t-width_8">
                        <div class="t-cover__wrapper t-valign_middle" style="height: 100vh">
                            <div class="t476__wrapper" data-hook-content="covercontent">
                                <div class="t476__content">
                                    <div class="t476__title t-title t-title_md t-margin_auto" field="title">
                                        <div style="font-size: 36px; text-align: left" data-customstyle="yes">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Haqqımızda
                                                </font>
                                            </font>
                                        </div>
                                    </div>
                                    <div class="t476__descr t-descr t-descr_md t-margin_auto" field="descr">
                                        <div style="font-size: 14px; text-align: left" data-customstyle="yes">
                                            {!! $setting->about !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($setting->partners)
        <div id="rec101938076" class="r t-rec t-rec_pt_75 t-rec_pb_45 r_showed r_anim"
            style="padding-top: 75px; padding-bottom: 45px" data-record-type="795">
            <!-- T795 -->
            <div class="t795">
                <div class="t-container t-align_center">
                    <div class="t-col t-col_10 t-prefix_1">
                        <div class="t795__title t-title t-title_xs t-margin_auto" field="title">
                            <div style="font-size: 36px">
                                <font style="vertical-align: inherit;">
                                    Bizə güvənənlərin siyahısı
                                </font>
                            </div>
                        </div>
                        @if ($setting->partners_title != null)
                            <div class="t795__descr t-descr t-descr_xl t-margin_auto" field="descr">
                                <div style="font-size: 24px">
                                    <font style="vertical-align: inherit;">
                                        {{ $setting->partners_title }}
                                    </font>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div id="rec205114061" class="r t-rec t-rec_pb_0" style="padding-bottom: 0px" data-animationappear="off"
            data-record-type="595">
            <!-- t595 -->
            <style>
                @media screen and (max-width: 960px) {

                    .t595__item_4-in-row,
                    .t595__item_5-in-row,
                    .t595__item_6-in-row {
                        width: 33.333%;
                    }
                }

                @media screen and (max-width: 1200px) {
                    .t595__item {
                        padding: 10 px;
                    }
                }

                .t595__item_5-in-row {
                    width: 20%;
                }

                .t595__item {
                    position: relative;
                    padding: 20px;
                    box-sizing: border-box;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    align-items: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    margin: 0;
                }

                @media screen and (max-width: 440px) {

                    .t595__item_3-in-row,
                    .t595__item_4-in-row,
                    .t595__item_5-in-row,
                    .t595__item_6-in-row {
                        width: 50%;
                    }
                }

            </style>
            <div class="t595">
                <div class="t595__container t-container">
                    @foreach ($partners as $partner)
                        <div class="t-col t595__item t595__item_5-in-row">
                            <div class="t595__line t595__line_vertical t595__line_vertical_1" style="background: #e2e5ea">
                            </div>
                            <img src="{{ $partner->logo }}" class="t595__img t-img loaded"
                                imgfield="li_img__1549900384894" style="max-width: 160px">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @if ($setting->models)
        <div id="rec62548609" class="r t-rec t-rec_pt_105 t-rec_pb_75" style="padding-top:105px;padding-bottom:75px;"
            data-animationappear="off" data-record-type="814">
            <!-- t814 -->
            <div class="t814">
                <div class="t-container">
                    <div class="t814__top t-col t-col_5">
                        <div class="t814__blocktext-wrapper" style="height: 567.986px;">
                            <div class="t814__blocktext t-align_left"
                                style="background-color: rgb(239, 239, 239); left: 0px; height: 409px;">
                                <div class="t814__content t-valign_middle">
                                    <div class="t814__box">
                                        <div class="t814__title t-title t-title_xs" field="title" style="color:#000000;">
                                            <div style="font-size:36px;" data-customstyle="yes">
                                                <strong>MODELLƏR</strong>
                                            </div>
                                        </div>
                                        <div class="t814__descr t-descr t-descr_md" field="descr" style="color:#000000;">
                                            <div style="font-size:16px;" data-customstyle="yes">
                                                {!! $setting->model_title !!}
                                            </div>
                                        </div>
                                        <div class="t814__btn-container">
                                            <div class="t814__btn-wrapper">
                                                <a href="{{ route('models') }}" class="t-btn"
                                                    style="color:#ffffff;background-color:#24dff8;border-radius:2px; -moz-border-radius:2px; -webkit-border-radius:2px;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td>Model seçin</td>
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
                            <div class="t814__blockimg t-bgimg t-animate loaded t-animate_started"
                                data-animate-style="zoomin" data-animate-group="yes" data-animate-order="1" bgimgfield="img"
                                style="background-image: url({{ $setting->model_image }}); transition-delay: 0s;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    t814_init('62548609');
                });
            </script>
        </div>
    @endif
    @if ($setting->our_team)
        <div id="rec198170573" class="r t-rec t-rec_pt_0 t-rec_pb_75" style="padding-top: 75px; padding-bottom: 75px"
            data-animationappear="off" data-record-type="524">
            <!-- t524 -->
            <div class="t524">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs" data-animate-style="fadeinup"
                                data-animate-group="yes" field="btitle" data-animate-start-time="1646249441646">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Komandamız
                                    </font>
                                </font>
                            </div>
                            @if ($setting->our_team_title != null)
                                <div class="t-section__descr t-descr t-descr_xl t-margin_auto" data-animate-style="fadeinup"
                                    data-animate-group="yes" field="bdescr" data-animate-start-time="1646249441806">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{ $setting->our_team_title }}
                                        </font>
                                    </font>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="t524__container t-container">
                    @foreach ($ourteams as $member)
                        <div style="margin-bottom: 1.5rem;"
                            class="t524__col t-col t-col_3 t-align_center t524__col-mobstyle t-animate__chain_first-in-row"
                            data-animate-style="fadeinup" data-animate-chain="yes">
                            <div class="t524__itemwrapper t524__itemwrapper_4">
                                <div class="t524__imgwrapper t-margin_auto">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                        bgimgfield="li_img__1573567856314"
                                        style="background-image: url({{ $member->image }});">
                                    </div>
                                </div>
                                <div class="t524__wrappercenter">
                                    <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                        field="li_persname__1573567856314">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{ $member->name }}
                                            </font>
                                        </font>
                                    </div>
                                    <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1573567856314">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                {{ $member->position }}
                                            </font>
                                        </font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
