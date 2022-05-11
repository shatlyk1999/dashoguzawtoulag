<div class="container">
    <div class="title_section">
        <h1 style="font-size: 30px;font-weight:600;line-height: 160%;color: #000;margin: 5% 0 3%;" class="">
            @lang('messages.sonky_habarlar')
        </h1>
    </div>
    <div class="row">
    @foreach($news as $item)          
        <div class="col-lg-4 col-xs-12 mb-50">
            <a class="institution-link" href="{{route('newsView', $item->id)}}">
                <article class="grid-blog-post">
                    <div class="post-thumbnail" style="height: 225px">
                        <img class="img100 w-100 zoom" src="{{$item->image}}" alt="" style="height:100%;object-fit:cover">                        </div>
                    <div class="post-content">
                        <!--   <i class="fa fa-chevron-right" aria-hidden="true"></i> -->
                        <h2 style="margin: 15px 0">
                            {{$item->title}}
                        </h2>
                        <p style="color: #424242;font-size: 16px;font-weight: 400">
                            {!!Str::limit($item->content,150,'...')!!}
                        </p>
                    </div>
                </article>
            </a>
        </div>
    @endforeach
    </div>
    <div class="col-xs-12 text-center" style="margin-top: 60px">
        <a href="{{route('news')}}">
            <button style="background: #116B30;border-radius: 3px;padding: 0.7rem 2rem;" type="button" class="btn btn-success">
                @lang('messages.all') &nbsp; <i class="fa fa-arrow-right "></i>
            </button>
        </a>
    </div>
</div>