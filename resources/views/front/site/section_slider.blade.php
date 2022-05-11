<div class="container-fluid" style="padding: 0">
  <div class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        @foreach($slider as $slid)
          <li class="splide__slide">
            <div class="slider_text_block">
              <img src="{{asset($slid->image)}}" alt="" class="img-fluid w-100">
            </div>
          </li>                     
        @endforeach                                  
      </ul>
    </div>
  </div>
</div>