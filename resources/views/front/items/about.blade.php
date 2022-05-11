@extends('front.layouts.common')
@section('title', trans("messages.about"))
@section('content')
@foreach($about as $ab)
<div class="content" style="padding: 50px 0;">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset($ab->image2)}}" alt="a" style="width:95%;height:95%"> 
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset($ab->image3)}}" alt="b" style="width:95%;height:95%">
                    </div>
                </div>
                <div class="about_content">
                    {!!$ab->content!!}
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 alike-content-wrapper">
                @include('front\widgets\news_widget')
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection