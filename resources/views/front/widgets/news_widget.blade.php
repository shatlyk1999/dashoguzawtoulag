<div class="pl-3">
    <div class="py-2 border-bottom font-weight-bold">
        @lang('messages.kop_okalan')                    
    </div>
    @foreach($randNews as $item)                        
    <div class="news-additional-item">
        <div class="news-additional-item-date">
            {{$item->date}}                   
        </div>
        <a href="{{route('newsView', $item->id)}}" class="news-additional-item-title">
            {{$item->title}}  
        </a>
    </div>
    @endforeach
</div>