@extends('front.layouts.common')
@section('title', trans("messages.contact"))
@section('content')
@foreach($info as $inf)
<div class="main_content">
    <div class="content" style="padding: 50px 0;">
        <div class="container">
            <div class="news-details_title">
                @lang('messages.contact')            
            </div>
            <div class="news-details">
                <div class="news-details-text">
                    <div class="news-contenta">
                        <p style="text-align:justify">
                            <span style="color:#000000">
                                <span style="font-size:11pt">
                                    <span style="font-family:Calibri,sans-serif">
                                        <span style="font-size:14.0pt">{{$inf->aboutTitle}}</span>
                                    </span>
                                </span>
                            </span>
                        </p>

<p style="text-align:justify"> </p>

<ol>
	<li style="text-align:justify">
        <span style="color:#000000">
            <span style="font-size:11pt">
                <span style="font-family:Calibri,sans-serif">
                    <strong>
                            <span style="font-size:14.0pt">@lang('messages.dzawtoulag')</span>
                    </strong>
                    <span style="font-size:14.0pt">: </span>
                </span>
            </span>
            <span style="font-size:11pt">
                <span style="font-family:Calibri,sans-serif">
                    <span style="font-size:14.0pt">{{$inf->address}}</span>
                </span>
            </span>
        </span>
    </li>
</ol>

<p style="margin-left:47px; text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"> @lang('messages.Phone'): {{$inf->phoneNumber}} </span></span></span></span></p>

<p style="margin-left:47px; text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">@lang('messages.fax'): {{$inf->faxNumber}} </span></span></span></span></p>

<p style="margin-left:47px; text-align:justify"><span style="color:#000000"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt">{{$inf->address_2}}</span></span></span></span></p>

{!!$inf->aboutCompany!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection