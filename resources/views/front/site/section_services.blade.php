<div class="container">
    <div class="row">
        <div class="col-md-5">
            <a href="{{route('services')}}">
                <h2 style="font-size: 30px;line-height: 48px;color: #1090CB;font-weight: 600" class="move zoomIn">
                    {{$services->title}}
                </h2>
            </a>
            <br>
            <div style="color: #585858;font-size: 20px;line-height: 200%">
                {!!($services->description)!!}
            </div>
        </div>
        <div class="col-md-5 offset-md-1">
            @foreach($serviceitems as $serviceitem)
                <div class="adv_field">
                    <img src="{{asset($serviceitem->image)}}" alt="Icon" style="margin-top:-30px">
                    <div class="adv_text" style="display: inline-block;margin-top: 20px;max-width:70%;">
                        <h4 style="color: #2F2C4A;font-weight: 600">{{$serviceitem->title}}</h4>
                        <p style="font-size: 16px;color: #656464">
                            {!!($serviceitem->content)!!}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
