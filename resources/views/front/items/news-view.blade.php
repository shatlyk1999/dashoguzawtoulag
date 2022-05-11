@extends('front.layouts.common')
@section('title', trans("messages.news"))
@section('content')
<div class="content" style="padding: 50px 0;">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="news-details_title">
                    {{$news->title}}      
                </div>
                <p style="color: #0099e5;font-size: 14px">
                    {{$news->date}}
                </p>
                <div class="news-details">
                    <div class="news-details-text">
                        <div class="news-details-image_wrapper">
                            <div class="d-flex justify-content-start py-2">     
                                <div class="small text-info float-left">
                                </div>
                            </div>
                            <div class="col-lg-5 col-xs-12" style="margin-bottom: 50px">
                                <a class="institution-link" href="{{asset($news->image)}}">
                                    <article class="grid-blog-post" style="border: none;">
                                        <div class="post-thumbnail">
                                            <img class="img100 w-100 h-100" src="{{asset($news->image)}}" alt="" style="border-radius:5px;min-height:225px">                        
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>      
                        <div class="news-contenta">
                            <p style="text-align:justify">
                                {!!($news->content)!!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="border-bottom my-4" style="font-family: 'Rubik Regular'; font-size: 1.8rem">
                    @lang('messages.seyle_hem')
                </div>
            <div>
            <div class="d-flex flex-wrap"> 
            @foreach($randNewsView as $item)
                <div class="related-page">
                    <div class="related-page-image-wrapper">
                        <img src="{{asset($item->image)}}" alt="{{$item->title}}">            
                    </div>
                    <div class="bar-beneath" style="height: 0.4rem">
                    </div>
                    <div class="d-flex flex-column justify-content-between">
                        <div class="related-page-title">
                            <a href="{{route('newsView', $item->id)}}">
                                {{$item->title}}                      
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 alike-content-wrapper">
                  @include('front\widgets\news_widget')
    
                    </div>
                </div>

        </div>
    </div>
</div>

@endsection