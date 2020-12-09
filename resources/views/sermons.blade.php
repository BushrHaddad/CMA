@extends('layouts.layout')

@section('page_title')
<title>Alliance Church-Syria & Lebanon</title>
@endsection

@section('active_index')
<li><a href="/">الرئيسية</a></li>
<li><a href="jesus">تعرف على يسوع</a></li>
<li class="active"><a href="sermons">عظات</a></li>
<li><a href="hymns">ترانيم</a></li>
<li><a href="articles">مقالات</a></li>
<li class="has-dropdown">
    <a href="#">خدمات</a>
    <ul class="dropdown">
        <li><a href="events">أحداث مهمة</a></li>
        <li><a href="books">كتب</a></li>
        <li><a href="devotions">تأملات</a></li>
    </ul>
</li>
<li><a href="contact">تواصل</a></li>
<li><a href="donate">تبرع</a></li>

@endsection

@section('page_content')

<div id="fh5co-content">
    <div class="container">
        <div class="row">
            <div class="side animate-box col-md-3">
                <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                    <h2><span>مواضيع</span></h2>
                </div>
                <ul class="category">

                    @for($i = 0 ; $i< 5 ; $i++) <li><a href="#"><i class="icon-check"></i>Topic</a></li>
                        @endfor
                </ul>
            </div>

            <div class="col-md-9" id="sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
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
                                <h2 class="card_body_title"> ماهي مكانتك في المسيح؟</h2>
                                <div class="card_body_date">10/18/2020</div>
                                <div class="card_body_subtitle">كلمة الله تقول أننا أبرار بفضل عمل المسيح على الصليب.
                                    قديسين
                                    مخلوقين ولادة جديدة.. هل تصدق هذا؟ وهل تعيش على أساس هذ تعيش على أ أساس هذ تعيش على
                                    أ
                                    أساس هذ تعيش على أساس هذه أساس هذ تعيش على أ أساس هذ تعيش على أساس هذه أساس هذ تعيش
                                    على
                                    أ أساس هذ تعيش على أساس هذه أساس هذ تعيش على أ أساس هذ تعيش على أساس هذه أساس هذ
                                    تعيش
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