<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.png')}}" />
    <link href="{{asset('front/css/style-starter.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/splide.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('front/assets/awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
</head>



<style>
.activ{
    background: #EFEA03;
    color: #116B30!important;
    border-radius: 5px;
}
</style>
<body onscroll="scroll()" style="font-family: 'Poppins', sans-serif;">

<div class="header_top" style="background: #EEF6FF;">
    <div class="container">
        <div class="row justify-content-end align-items-center"> 
            <i style="color: #333" class="fa fa-envelope-o"></i>
            <a style="color: #333;font-family: 'Montserrat', sans-serif;" href="mailto:info@awtoulag.gov.tm ?>">info@awtoulag.gov.tm</a>
            <div class="lang_img" style="margin: 5px 0 7px 20px;">
                <li class="nav-item dropdown language-switcher">
                    <ul class="lang_ul">
                        <li>
                            <a href="{{route('lang.switch', 'tm')}}">
                                <img class="flag" src="{{asset('front/assets/tm.png')}}" alt="tm">
                            </a>
                        </li>
                        <li>
                            <a href="{{route('lang.switch', 'ru')}}">
                                <img class="flag" src="{{asset('front/assets/ru.png')}}" alt="ru">
                            </a>
                        </li>
                        <li>
                            <a href="{{route('lang.switch', 'en')}}">
                                <img class="flag" src="{{asset('front/assets/en.png')}}" alt="en">
                            </a>
                        </li>
                    </ul>
                </li>            
            </div>
        </div>
    </div>
</div>
<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <header class="w3l-header">
                    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
                        <div class="container">  
                            <a class="navbar-brand active d-flex align-items-center" href="{{route('home')}}">
                                <div style="display: inline-block;margin-right: 15px">
                                    <img src="{{asset('front/assets/logo.png')}}" alt="Logo">
                                </div>
                                <div style="display: inline-block;font-size: 20px;color: #333;font-family: Montserrat;line-height: 28px;font-weight: 700;text-transform: uppercase;">
                                    @lang('messages.logo')
                                </div>
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fa icon-expand fa-bars"></span>
                                <span class="fa icon-close fa-times"></span>
                            </button>
                        </div>
                    </nav>
                </header>
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand active d-flex align-items-center" href="/">
                        <div style="display: inline-block;font-size: 20px;color: #333;font-family: Montserrat;line-height: 28px;font-weight: 700;text-transform: uppercase;">
                            @lang('messages.logo_2022')
                        </div>
                        <div style="display: inline-block;margin-right: 15px">
                            <img style="width: 100px;height: 80px;margin-left: 15px" src="{{asset('front/assets/2022nysany.png')}}" alt="Logo">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-bar-wrapper visible-md visible-lg">
    <div class="inner">
        <div class="container">
            <div class="top-bar relative d-flex align-items-center">
                <div class="top-menu">
                    <nav>
                        <ul class="">
                            <li class="">
                                <a href="{{route('home')}}" class='nav-link'>@lang('messages.home')</a>
                            </li>
                            <li class="">
                                <a href="{{route('about')}}" class='nav-link'>@lang('messages.about')</a>
                            </li>
                            <li class="">
                                <a href="{{route('services')}}" class='nav-link'>@lang('messages.services')</a>
                            </li>
                            <li class="">
                                <a href="{{route('news')}}" class='nav-link'>@lang('messages.news')</a>
                            </li>
                            <li class="">
                                <a href="{{route('contactpage')}}" class='nav-link'>@lang('messages.сontacts')</a>
                            </li>
                        </ul> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


    
