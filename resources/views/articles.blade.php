@extends('layouts.layout')

@section('page_title')
<title>Alliance Church-Syria & Lebanon</title>
@endsection

@section('active_index')

<li><a href="/">@lang('titles.main')</a></li>
<li><a href="jesus">@lang('titles.know_jesus')</a></li>
<li><a href="sermons">@lang('titles.sermons')</a></li>
<li><a href="hymns">@lang('titles.hymns')</a></li>
<li class="active"><a href="articles">@lang('titles.articles')</a></li>
<li class="has-dropdown">
    <a href="#">@lang('titles.other_services')</a>
    <ul class="dropdown">
        <li><a href="#">@lang('titles.events')</a></li>
        <li><a href="#">@lang('titles.books')</a></li>
        <li><a href="#">@lang('titles.devotions')</a></li>
    </ul>
</li>
<li><a href="about">@lang('titles.who_we_are')</a></li>
<li><a href="contact">@lang('titles.contact')</a></li>
<li><a href="donate">@lang('titles.donate')</a></li>

@endsection

@section('page_content')

<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="side animate-box col-md-3">
                <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                    <h2><span>مواضيع</span></h2>
                </div>
                <ul class="category">

                    @for($i = 0 ; $i< 5 ; $i++) 
                        <li><a href="#"><i class="icon-check"></i>Topic</a></li>
                     @endfor
                </ul>
            </div>

            <div class="col-md-9" id="CMA-sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>مقالات</span></h2>
                    </div>

                    @foreach($results as $result)
                    <div class="blog-entry">
                        <a href="#">
                            <img src="/imgs/blog-2.jpg" class="img-responsive" alt="">
                            <div class="desc">
                                <span class="date">{{ date("m.d.y", strtotime($result->created_at) ) }}</span>
                                <!-- <span class="date">2020-Dec-5</span> -->
                                <h3>{{$result->name}}</h3>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Pagination -->
            {{$results->links()}}
        </div>
    </div>
</div>

<!-- Footer -->
@endsection