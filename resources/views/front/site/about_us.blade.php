@foreach($about as $ab)
<div class="midd-w3 py-5">
    <div class="container py-lg-4 py-md-3">
        <div class="row">
                <div class="col-lg-6 left-wthree-img text-lg-right mt-lg-0 mt-2">
                    <div class="row align-items-end">
                        <div class="col-6">
                            <img src="{{asset($ab->image)}}" alt="about us" class="b-r">
                        </div>
                        <div class="col-6">
                            <img src="{{asset($ab->image1)}}" class="img-fluid b-r" alt="about us">
                        </div>
                    </div>
            </div>
            <div class="col-lg-5 about-right-faq align-self" style="margin-left: 20px;">

                <h4 style="font-weight: normal;color: #1090CB;">{{$ab->title}}</h4>
                <p class="mt-4 mb-4" style="color: #868686;font-size: 18px">{{$ab->description}}</p>
                <a href="{{route('about')}}" class="btn btn-style btn-effect mt-lg-0 mt-4">@lang('messages.detail')</a>
            </div>

        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-5 offset-lg-1 text-lg-right">
                <div class="position-relative">
                    <img style="height: 300px" src="{{asset($ab->image2)}}" alt="" class="radius-image img-fluid">
                </div>
            </div>
            <div class="col-lg-5 text-lg-left" style="margin-left: 20px;">
                <div class="position-relative">
                    <img style="height: 300px" src="{{asset($ab->image3)}}" alt="" class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach