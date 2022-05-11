@extends('front.layouts.common')
@section('title', trans("messages.logo1"))
@section('content')

<div class="main_content">
<section id="home" class="w3l-banner">
    @include('front\site\section_slider', $data)
</section>

<section class="w3l-index3" id="about">
    @include('front\site\about_us', $data)
</section>

<section class="advantages">
    @include('front\site\section_services', $data) 
</section>

<section id="news" class="news">
     @include('front\site\news', $data)
</section>

</div>

@endsection