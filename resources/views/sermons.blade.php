@extends('layouts.layout')

@section('page_title')
<title>Alliance Church-Syria & Lebanon</title>
@endsection

@section('active_index')
<li><a href="/">@lang('titles.main')</a></li>
<li><a href="jesus">@lang('titles.know_jesus')</a></li>
<li class="active"><a href="sermons">@lang('titles.sermons')</a></li>
<li><a href="hymns">@lang('titles.hymns')</a></li>
<li><a href="articles">@lang('titles.articles')</a></li>
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

                    @for($i = 0 ; $i< 5 ; $i++) <li><a href="#"><i class="icon-check"></i>Topic</a></li>
                        @endfor
                </ul>
            </div>

            <div class="col-md-9" id="sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>عظات</span></h2>
                    </div>

                    @foreach($results as $result)
                    <div class="col-md-6">
                        <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love"
                            class="grid-x1-3 card">
                            <div class="card_label">
                                <div class="card_label_inner">
                                    <h5>عظات</h3>
                                </div>
                            </div>
                            <div class="card_landscape_img">
                                <img alt="Mastered by Matchless Love: The Sweet Experience of Irresistible Grace"
                                    src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                                    data-src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                                    class="lazyloaded">
                            </div>

                            <div class="card_body">
                                <h2 class="card_body_title"> {{$result->name}} </h2>
                                <div class="card_body_date"> {{ date("m.d.y", strtotime($result->created_at)) }} </div>
                                <div class="card_body_subtitle"> {{$result->desc}} </div>

                            </div>
                            
                            <div class="card_footer">
                                <div class="card_author">
                                    <img alt="" class="card_author_image"
                                        src="https://dg.imgix.net/john-piper-t1zc1vhs-en/square/john-piper-t1zc1vhs-bb4f7ebdfa75335bd1534e50dc3bbc7c.jpg?ts=1549038789&amp;ixlib=rails-4.1.0&amp;auto=format%2Ccompress&amp;fit=min&amp;w=30&amp;h=30&amp;dpr=2&amp;ch=Width%2CDPR">
                                    <span class="card_author_text">طلال شماس</span>
                                </div>
                                <span class="share_count">172 Shares</span>
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