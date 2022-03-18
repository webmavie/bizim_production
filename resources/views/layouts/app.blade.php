<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!DOCTYPE html>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $setting->site_description }}">
    <meta property="title" content="{{ $setting->title }}" />
    <meta name=”robots” content="index, follow">
    <meta property="og:title" content="{{ $setting->title }}" />
    <meta property="og:description" content="{{ $setting->site_description }}" />
    <!--metatextblock-->
    <title>@yield('title')</title>
    <!--/metatextblock-->
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <!-- Assets -->
    <link rel="stylesheet" href="{{ asset('front/css/tilda-blocks-2.146ca7.css?t=1642078853') }}" type="text/css"
        media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;subset=latin,cyrillic"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('back/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/tilda-grid-3.0.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('front/css/tilda-animation-1.0.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('front/css/tilda-menusub-1.0.min.css') }}" type="text/css" media="print"
        onload="this.media='all';" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('front/css/tilda-menusub-1.0.min.css') }}" type="text/css"
            media="all" />
    </noscript>
    <link rel="stylesheet" href="{{ asset('front/css/tilda-slds-1.4.min.css') }}" type="text/css" media="print"
        onload="this.media='all';" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('front/css/tilda-slds-1.4.min.css') }}" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="{{ asset('front/css/tilda-zoom-2.0.min.css') }}" type="text/css" media="print"
        onload="this.media='all';" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('front/css/tilda-zoom-2.0.min.css') }}" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="{{ asset('front/css/tilda-forms-1.0.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('front/css/tilda-cover-1.0.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('front/dist/iziToast.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('front/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('front/js/tilda-scripts-3.0.min.js') }}"></script>
    <script src="{{ asset('front/js/tilda-blocks-2.76ca7.js?t=1642078853') }}"></script>
    <script src="{{ asset('front/js/lazyload-1.3.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-animation-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-cover-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-events-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-menusub-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-slds-1.4.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/hammer.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-zoom-2.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/js/tilda-forms-1.0.min.js') }}" charset="utf-8" async></script>
    <script src="{{ asset('front/dist/iziToast.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/dist/econtrol.js') }}" type="text/javascript"></script>
</head>

<body class="t-body" style="margin: 0px; position: relative; min-height: 100%; top: 40px;">
    <!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="784866"
        data-tilda-page-id="5692890" data-tilda-page-alias="ua/" data-tilda-formskey="98fafe8dc67051f277129d44273617d4"
        data-tilda-lazy="yes" data-tilda-page-headcode="yes">
        <div id="rec103792169" class="r t-rec" style="background-color: #ffffff" data-animationappear="off"
            data-record-type="230" data-bg-color="#ffffff">
            <div id="nav103792169" class="t199__header t199__js__header t199__is__active" data-menu="yes">
                <div class="t199__holder">
                    <a class="t199__logo" href="{{ route('welcome') }}">
                        <img src="{{ asset('images/logo.png') }}" class="t199__logo-image"
                            style="max-width: 140px; width: 100%; height: auto" imgfield="img">
                        <div class="t199__logo-text-mobile t-title" field="title">
                            <span style="color: darkslategray">
                                BİZİM</span> <span style="color: orangered">PRODUCTİON</span>
                        </div>
                    </a>
                    <a class="t199__mmenu-toggler t199__js__menu-toggler" href="#">
                        <span class="t199__mmenu-toggler-in"></span>
                    </a>
                    <div class="t199__mmenu t199__js__menu">
                        <nav class="t199__menu">
                            <div class="t199__menu-item-wrap">
                                <a class="t199__menu-item t-title t-menu__link-item"
                                    href="@if (Request::segment(1) == '') #rec205110593 @else {{ route('welcome') . '/#rec205110593' }} @endif">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Əsas Səhifə</font>
                                    </font>
                                </a>
                            </div>
                            <div class="t199__menu-item-wrap">
                                <a class="t199__menu-item t-title t-menu__link-item"
                                    href="@if (Request::segment(1) == '') #rec101938074 @else {{ route('welcome') . '/#rec101938074' }} @endif">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Xidmətlər</font>
                                    </font>
                                </a>
                            </div>
                            <div class="t199__menu-item-wrap">
                                <a class="t199__menu-item t-title t-menu__link-item"
                                    href="@if (Request::segment(1) == '') #rec101938075 @else {{ route('welcome') . '/#rec101938075' }} @endif">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Haqqımızda</font>
                                    </font>
                                </a>
                            </div>
                            <div class="t199__menu-item-wrap">
                                <a class="t199__menu-item t-title t-menu__link-item" href="#rec205124679">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Əlaqə</font>
                                    </font>
                                </a>
                            </div>
                            @if ($setting->instagram != null)
                                <div class="t199__menu-item-wrap">
                                    <a class="t199__menu-item t-title t-menu__link-item"
                                        href="{{ $setting->instagram }}">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </div>
                            @endif
                            @if ($setting->facebook != null)
                                <div class="t199__menu-item-wrap">
                                    <a class="t199__menu-item t-title t-menu__link-item"
                                        href="{{ $setting->facebook }}">
                                        <i class="fab fa-facebook-f fa-lg"></i> </a>
                                </div>
                            @endif
                            <div class="t199__menu-item-wrap">
                                <a class="t199__menu-item t-title t-menu__link-item"
                                    href="tel:{{ $setting->phone }}">
                                    {{ $setting->phone }}
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    t199_showMenu("103792169");
                    t199_positionHeader("103792169");
                    t199_highlight("103792169");
                    t199_checkAnchorLinks("103792169");
                });
            </script>
            <style>
                @media screen and (max-width: 1024px) {

                    #rec103792169 .t199__mmenu-toggler-in,
                    #rec103792169 .t199__mmenu-toggler-in:before,
                    #rec103792169 .t199__mmenu-toggler-in:after {
                        background-color: #ffffff;
                    }

                    #rec103792169 .t199__mmenu-toggler {
                        background-color: #000000;
                    }
                }

            </style>
            <style>
                #rec103792169 .t-menu__link-item {
                    -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                }

                #rec103792169 .t-menu__link-item.t-active {
                    color: #24dff8 !important;
                }

                #rec103792169 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                    color: #24dff8 !important;
                }

                @supports (overflow: -webkit-marquee) and (justify-content: inherit) {

                    #rec103792169 .t-menu__link-item,
                    #rec103792169 .t-menu__link-item.t-active {
                        opacity: 1 !important;
                    }
                }

            </style>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t_onFuncLoad("t_menusub_init", function() {
                            t_menusub_init("103792169");
                        });
                    }, 500);
                });
            </script>
            <style>
                @media screen and (max-width: 980px) {
                    #rec103792169 .t-menusub__menu .t-menusub__link-item {
                        color: #000000 !important;
                    }

                    #rec103792169 .t-menusub__menu .t-menusub__link-item.t-active {
                        color: #000000 !important;
                    }
                }

            </style>
        </div>
        @yield('content')
        {{-- scroll to top --}}
        <div id="rec205116225" class="r t-rec t-screenmin-1200px" data-animationappear="off" data-record-type="217"
            data-screen-min="1200px">
            <div class="t190"
                style="position: fixed; z-index: 100000; bottom: 30px; right: 20px; min-height: 30px; display: none;">
                <a href="javascript:t190_scrollToTop()">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="50px" height="50px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                        xml:space="preserve">
                        <path style="fill: #000000"
                            d="M47.875,24c0,13.186-10.689,23.875-23.875,23.875S0.125,37.186,0.125,24S10.814,0.125,24,0.125 S47.875,10.814,47.875,24z M25.503,16.881l6.994,7.049c0.583,0.588,1.532,0.592,2.121,0.008c0.588-0.583,0.592-1.533,0.008-2.122 l-9.562-9.637c-0.281-0.283-0.664-0.443-1.063-0.443c0,0,0,0-0.001,0c-0.399,0-0.782,0.159-1.063,0.442l-9.591,9.637 c-0.584,0.587-0.583,1.537,0.005,2.121c0.292,0.292,0.675,0.437,1.058,0.437c0.385,0,0.77-0.147,1.063-0.442L22.5,16.87v19.163 c0,0.828,0.671,1.5,1.5,1.5s1.5-0.672,1.5-1.5L25.503,16.881z">
                        </path>
                    </svg>
                </a>
            </div>
            <script>
                $(document).ready(function() {
                    $(".t190").css("display", "none");
                    $(window).bind(
                        "scroll",
                        t_throttle(function() {
                            if ($(window).scrollTop() > $(window).height()) {
                                if ($(".t190").css("display") == "none") {
                                    $(".t190").css("display", "block");
                                }
                            } else {
                                if ($(".t190").css("display") == "block") {
                                    $(".t190").css("display", "none");
                                }
                            }
                        }, 200)
                    );
                });
            </script>
        </div>
        @if ($setting->whatsapp != null)
            <div id="rec101938085" class="r t-rec" data-animationappear="off" data-record-type="651"
                style="opacity: 1;">
                <!-- T651 -->
                <div class="t651">
                    <a href="https://api.whatsapp.com/send?phone={{ $setting->whatsapp }}&text=Salam,%20xidm%C9%99tl%C9%99riniz%20haqq%C4%B1nda%20m%C9%99lumat%20almaq%20ist%C9%99yirdim."
                        target="_blank" rel="noopener norefferer">
                        <div class="t651__btn">
                            <div style="background: white; display: flex; justify-content: center; align-items: center"
                                class="t651__btn_wrapper t651__btn_animate">
                                <svg width="34px" height="34px" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 418.135 418.135" style="enable-background:new 0 0 418.135 418.135;"
                                    xml:space="preserve">
                                    <g>
                                        <path style="fill:#7AD06D;" d="M198.929,0.242C88.5,5.5,1.356,97.466,1.691,208.02c0.102,33.672,8.231,65.454,22.571,93.536
                                    L2.245,408.429c-1.191,5.781,4.023,10.843,9.766,9.483l104.723-24.811c26.905,13.402,57.125,21.143,89.108,21.631
                                    c112.869,1.724,206.982-87.897,210.5-200.724C420.113,93.065,320.295-5.538,198.929,0.242z M323.886,322.197
                                    c-30.669,30.669-71.446,47.559-114.818,47.559c-25.396,0-49.71-5.698-72.269-16.935l-14.584-7.265l-64.206,15.212l13.515-65.607
                                    l-7.185-14.07c-11.711-22.935-17.649-47.736-17.649-73.713c0-43.373,16.89-84.149,47.559-114.819
                                    c30.395-30.395,71.837-47.56,114.822-47.56C252.443,45,293.218,61.89,323.887,92.558c30.669,30.669,47.559,71.445,47.56,114.817
                                    C371.446,250.361,354.281,291.803,323.886,322.197z" />
                                        <path style="fill:#7AD06D;"
                                            d="M309.712,252.351l-40.169-11.534c-5.281-1.516-10.968-0.018-14.816,3.903l-9.823,10.008
                                    c-4.142,4.22-10.427,5.576-15.909,3.358c-19.002-7.69-58.974-43.23-69.182-61.007c-2.945-5.128-2.458-11.539,1.158-16.218
                                    l8.576-11.095c3.36-4.347,4.069-10.185,1.847-15.21l-16.9-38.223c-4.048-9.155-15.747-11.82-23.39-5.356
                                    c-11.211,9.482-24.513,23.891-26.13,39.854c-2.851,28.144,9.219,63.622,54.862,106.222c52.73,49.215,94.956,55.717,122.449,49.057
                                    c15.594-3.777,28.056-18.919,35.921-31.317C323.568,266.34,319.334,255.114,309.712,252.351z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endif
        <div id="rec205124679" class="r t-rec t-rec_pt_30 t-rec_pb_150" style="
                  padding-top: 50px;
                  padding-bottom: 90px;
                  background-color: #ffffff;" data-animationappear="off" data-record-type="718"
            data-bg-color="#ffffff">
            <!-- t718 -->
            <div class="t718">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs" field="btitle">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Bizimlə əlaqə
                                    </font>
                                </font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <div class="t-col t-col_5 t-prefix_1">
                        <div class="t718__contentbox">
                            <div class="t718__contentwrapper">
                                <div class="t718__contacts t-text t-descr_xxxl" field="text">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <a style="color: black !important;"
                                                href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                        </font>
                                    </font><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <a style="color: black !important;"
                                                href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                        </font>
                                    </font>
                                </div>
                                <div class="t718__address t-text t-text_sm" field="text2">
                                    <font style="vertical-align: inherit;">
                                        {{ $setting->address }}
                                    </font>
                                </div>
                                <div class="t-sociallinks">
                                    <div class="t-sociallinks__wrapper">
                                        @if ($setting->facebook != null)
                                            <div class="t-sociallinks__item">
                                                <a href="{{ $setting->facebook }}" target="_blank" rel="noopener">
                                                    <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="30px" height="30px" viewBox="0 0 48 48"
                                                        enable-background="new 0 0 48 48" xml:space="preserve">
                                                        <desc>Facebook</desc>
                                                        <path
                                                            d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                        @if ($setting->instagram != null)
                                            <div class="t-sociallinks__item">
                                                <a href="{{ $setting->instagram }}" target="_blank" rel="noopener">
                                                    <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                                        height="30px" viewBox="0 0 30 30" xml:space="preserve">
                                                        <desc>Instagram</desc>
                                                        <path
                                                            d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z">
                                                        </path>
                                                        <path
                                                            d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z">
                                                        </path>
                                                        <path
                                                            d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-col t-col_5">
                        <div class="t-form__inputsbox">
                            <div class="t-input-group t-input-group_nm" data-input-lid="1496238250184">
                                <div class="t-input-block">
                                    <input type="text" id="name" class="t-input js-tilda-rule" placeholder="Ad"
                                        data-tilda-rule="name" style="
                                            border: 1px solid #c7c7c7;
                                            background-color: #ffffff;">
                                    <div class="t-input-error"></div>
                                </div>
                            </div>
                            <div class="t-input-group t-input-group_em" data-input-lid="1496238230199">
                                <div class="t-input-block">
                                    <input type="text" id="email" class="t-input js-tilda-rule"
                                        placeholder="E-poçt adresiniz" data-tilda-rule="email" style="
                                            border: 1px solid #c7c7c7;
                                            background-color: #ffffff;">
                                    <div class="t-input-error"></div>
                                </div>
                            </div>
                            <div class="t-input-group t-input-group_ta" data-input-lid="1496238259342">
                                <div class="t-input-block">
                                    <textarea id="message" class="t-input js-tilda-rule" placeholder="Mesajınız" style="border: 1px solid #c7c7c7;
                                        background-color: #ffffff;
                                        height: 102px;" rows="3"></textarea>
                                    <div class="t-input-error"></div>
                                </div>
                            </div>
                            <div class="t-form__submit">
                                <button id="form_submit" type="submit" class="t-submit" style="
                                color: #ffffff;
                                background-color: #24dff8;
                                border-radius: 50px;
                                -moz-border-radius: 50px;
                                -webkit-border-radius: 50px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Göndər
                                        </font>
                                    </font>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('js')
</body>

</html>
