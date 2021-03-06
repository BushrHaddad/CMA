@extends('layouts.layout')

@section('page_content')

<div>
    <div class="masthead" style="background-image: url(/imgs/slide5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>{{ $result->name }}</h1>
                        <span class="subheading">{{ $result->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="resource-hero">

        <iframe class="youtube-player" type="text/html" width="800" height="430"
            src="https://www.youtube.com/embed/ihi2oe_sXN0" frameborder="0">
        </iframe>

        <!-- <audio class="audio-player" controls src="/audios/audio1.mp3">
                Your browser does not support the
                <code>audio</code> element.
            </audio>  -->

    </div>

    <div class="resource-hero-info">
        <time class="resource-date"
            datetime="2020-11-12">{{ \Carbon\Carbon::parse($result->created)->format('jS F Y') }}</time>
        <div class="resource-author">
            <img alt="" class="card_author_image"
                src="https://dg.imgix.net/john-piper-t1zc1vhs-en/square/john-piper-t1zc1vhs-bb4f7ebdfa75335bd1534e50dc3bbc7c.jpg?ts=1549038789&amp;ixlib=rails-4.1.0&amp;auto=format%2Ccompress&amp;fit=min&amp;w=30&amp;h=30&amp;dpr=2&amp;ch=Width%2CDPR">
            <!-- src="https://dg.imgix.net/john-piper-t1zc1vhs-en/square/john-piper-t1zc1vhs-bb4f7ebdfa75335bd1534e50dc3bbc7c.jpg?ts=1549038789&amp;ixlib=rails-4.1.0&amp;auto=format%2Ccompress&amp;fit=min&amp;w=30&amp;h=30&amp;dpr=2&amp;ch=Width%2CDPR"> -->
            <span class="card_author_text">{{$result->author_name}}</span>
        </div>
    </div>


    <div class="resource-text">
        <!-- Article Title -->
        <h1>
            {{ $result->name }}
        </h1>
        <!-- Article Description or Text -->
        {!! $result->desc !!}
    </div>
    <hr style="height: .2px; background-color:gray">
    <div class="resource-footer">
    </div>
</div>
<div id="cards" class="related-resources">
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 4; $i++) <div class="col-md-3">
                <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love" class="grid-x1-3 card">
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
                        <h2 class="card_body_title"> ماهي مكانتك في المسيح؟</h2>
                        <div class="card_body_date">10/18/2020</div>
                        <div class="card_body_subtitle">كلمة الله تقول أننا أبرار بفضل عمل المسيح على الصليب. قديسين
                            مخلوقين ولادة جديدة.. هل تصدق هذا؟ وهل تعيش على أساس هذ تعيش على أ أساس هذ تعيش على أ
                            أساس هذ تعيش على أساس هذه أساس هذ تعيش على أ أساس هذ تعيش على أساس هذه أساس هذ تعيش على
                            أ أساس هذ تعيش على أساس هذه أساس هذ تعيش على أ أساس هذ تعيش على أساس هذه أساس هذ تعيش
                            على أ أساس هذ تعيش على أساس هذه الحقيقة؟</div>

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
        @endfor
    </div>
</div>
</div>

<!-- Footer -->
@endsection