@extends('front.layouts.common')
@section('title', trans("messages.services"))
@section('content')

<div class="content" style="padding: 50px 0;">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="news-details">
                    <div class="news-details-text">
                        <div style="margin: 3% 0 4% 0" class="row text-center">
                            <div class="col-md-6 col-lg-4 cards">
                                <div class="func_cards">
                                    <div class="func_card_title ">
                                        <i class="service-one__icon  fa fa-cubes"></i>
                                    </div>
                                    <h4 style="color: #fff">@lang('messages.Shipping') </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 cards">
                                <div class="func_cards">
                                    <div class="func_card_title">
                                        <i class="service-one__icon  fa fa-group"></i>
                                    </div>
                                    <h4 style="color: #fff">@lang('messages.Passanger')</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 cards">
                                <div class="func_cards box-koire move">
                                    <div class="func_card_title">
                                        <i class="service-one__icon  fa fa-life-ring"></i>
                                    </div>
                                    <h4 style="color: #fff">@lang('messages.Vehicle')</h4>
                                </div>
                            </div>
                        </div>                     
                        <div class="news-contenta">
                            {!!$services->content!!}
                            @foreach($info as $inf)
                            <p style="text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"> @lang('messages.Phone')</span><span style="font-size:14.0pt">: {{$inf->phoneNumber}} </span></span></span></span></p>
                            <p style="text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">@lang('messages.fax')</span><span style="font-size:14.0pt">: {{$inf->faxNumber}} </span></span></span></span></p>
                            <p style="text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">{{$inf->address_2}}</span><span style="font-size:14.0pt"></span></span></span></span></p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 alike-content-wrapper">
                @include('front\widgets\news_widget')
            </div>
        </div>
    </div>
</div>

@endsection