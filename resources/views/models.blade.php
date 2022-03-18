@extends('layouts.app')
@section('content')
    <div id="rec147113802" class="r t-rec t-rec_pt_120 t-rec_pb_90 r_showed r_anim"
        style="padding-top:120px;padding-bottom:90px;" data-record-type="60">
        <!-- T050 -->
        <div class="t050">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t050__title t-title t-title_xxl" field="title">
                        <div style="font-size:62px;" data-customstyle="yes">Modellərimiz</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec144435851" class="r t-rec t-rec_pt_135 t-rec_pb_60"
        style="padding-top:135px;padding-bottom:60px;background-color:#efefef;" data-animationappear="off"
        data-record-type="774" data-bg-color="#efefef">
        <!-- T774 -->
        <div class="t774">
            <div class="t774__container t774__container_mobile-grid" data-blocks-per-row="4">
                @foreach ($models as $model)
                    <div class="t774__col t-col t-col_3 t-align_center t-item t774__col_mobile-grid">
                        <div class="t774__wrapper">
                            <a href="{{ route('model', $model->slug) }}" rel="noopener">
                                <div class="t774__imgwrapper" style="padding-bottom:115.38461538462%;"
                                    itemtype="http://schema.org/ImageObject">
                                    <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1574625241664"
                                        style="background-image: url({{ $model->main_image }});">
                                    </div>
                                </div>
                            </a>
                            <div class="t774__content" style="height: 242px;">
                                <a href="{{ route('model', $model->slug) }}" target="_blank" rel="noopener">
                                    <div class="t774__textwrapper">
                                        <div class="t774__title t-name t-name_xs" field="li_title__1574625241664">
                                            <div style="font-size:18px;" data-customstyle="yes">{{ $model->name }}</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="t774__btn-wrapper">
                                    <a href="{{ route('model', $model->slug) }}" target="_blank"
                                        class="t774__btn t774__btn t-btn t-btn_xs"
                                        style="color:#ffffff;background-color:#24dff8;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;"
                                        rel="noopener">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>Bax</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($loop->iteration % 4 == 0)
                        <div class="t-clear t774__separator"></div>
                    @endif
                @endforeach
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                t774_init('144435851');
            });
        </script>
    </div>
@endsection
