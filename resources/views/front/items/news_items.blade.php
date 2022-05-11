@extends('front.layouts.common')
@section('title', trans("messages.news"))
@section('content')

<div class="news_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 pl-3">
                @foreach($news as $item)
                    <a href="{{route('newsView', $item->id)}}" class="row pb-4 my-4 pr-4">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <img class="singleNews-img" src="{{asset($item->image)}}" alt="{{$item->title}}">                    
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12"> 
                            <div class="pb-1 pl-0" style="color: #000">
                                {{$item->date}}                        
                            </div>
                            <div class="news-list-title" style="color: #000">
                                {{$item->title}}
                            </div>
                            <div class="news-list-description">
                                <p style="color: #000">
                                    {!!(Str::words($item->content,20,'...'))!!}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                                
                <!-- <ul class="pagination"><li class="prev disabled"><span>«</span></li>
                    <li class="active"><a href="/item/a/index?path=news&amp;sort=-id" data-page="0">1</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=2" data-page="1">2</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=3" data-page="2">3</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=4" data-page="3">4</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=5" data-page="4">5</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=6" data-page="5">6</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=7" data-page="6">7</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=8" data-page="7">8</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=9" data-page="8">9</a></li>
                    <li><a href="/item/a/index?path=news&amp;sort=-id&amp;page=10" data-page="9">10</a></li>
                    <li class="next"><a href="/item/a/index?path=news&amp;sort=-id&amp;page=2" data-page="1">»</a></li>
                </ul> -->
                {{$news->onEachSide(0)->links()}}

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 alike-content-wrapper">
                @include('front\widgets\news_widget')
            </div>
        </div>
    </div>
</div>

@endsection