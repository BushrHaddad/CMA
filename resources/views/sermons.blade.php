@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="cards">
    <div class="container">
        <div class="row">
            <div class="side animate-box col-md-3">
                <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                    <h2><span>مواضيع</span></h2>
                </div>
                <div id="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>

            </div>

            <div class="col-md-9" id="CMA-sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>عظات</span></h2>
                    </div>

                    @foreach($results as $result)
                    <div class="col-md-6">
                        <a href="{{route('resource',$result->id)}}" class="grid-x1-3 card">
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