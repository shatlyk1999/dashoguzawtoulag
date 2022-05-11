@foreach($info as $inf)
<section class="w3l-footer-29-main" style="padding-bottom: 0;background-color: #333">
    <div class="footer-29">
        <div class="container py-lg-4">
            <div class="row footer-top-29">
                <div class="col-lg-4 col-md-6 col-sm-7 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">
                    <ul>
                        <h6 class="footer-title-29">@lang('messages.categories')</h6>
                        <ul class="">
                            <li class=""><li>
                                <a href="{{route('home')}}" class=''>@lang('messages.home')</a>
                            </li></li>
                            <li class=""><li>
                                <a href="{{route('about')}}" class=''>@lang('messages.about')</a>
                            </li></li>
                            <li class=""><li>
                                <a href="{{route('services')}}" class=''>@lang('messages.services')</a>
                            </li></li>
                            <li class=""><li>
                                <a href="{{route('news')}}" class=''>@lang('messages.news')</a>
                            </li></li>
                            <li class=""><li>
                                <a href="{{route('contactpage')}}" class=''>@lang('messages.сontacts')</a>
                            </li></li>
                        </ul>                                       
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-5 footer-list-29 footer-1">
                    <h6 class="footer-title-29">@lang('messages.contact_ucin')</h6>
                    <div style="font-size: 18px;line-height: 28px;color: #fff;">
                        @lang('messages.Phone'): {{$inf->phoneNumber}} <br>
                        @lang('messages.fax'): {{$inf->faxNumber}} <br>
                        {{$inf->address_2}}<br>                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <h6 class="footer-title-29">@lang('messages.address')</h6>
                    <div style="font-size: 18px;line-height: 28px;color: #fff;">
                        {{$inf->address}}                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

<section class="w3l-footer-29-main w3l-copyright" style="padding-bottom: 0;background-color: #333">
    <div class="container">
        <div class="row bottom-copies">
        <!--      <p class="col-lg-8 copy-footer-29">© 2020 DaşoguzAwtoulag. Ähli hukuklar goralan.</p> -->
            <p class="col-lg-8 copy-footer-29">&copy; 2022. @lang('messages.poweredByFooter')  </p>



        </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
    <i style="color: #FFB200;" class="fa fa-2x fa-angle-up"></i>
</button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>

<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/splide.min.js')}}"></script>
<script src="{{asset('front/js/custom1.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countup.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/custom.js')}}"></script>
<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<script>
    $('.nav-link').filter(function(){
        return this.href === location.href;
      }).addClass('activ');

</script>
</body>
</html>