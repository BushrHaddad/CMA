@extends('layouts.layout')

@section('page_title')
<title>Alliance Church-Syria & Lebanon</title>
@endsection

@section('active_index')
<li class="active"><a href="/">الرئيسية</a></li>
<li><a href="jesus">تعرف على يسوع</a></li>
<li><a href="sermons">عظات</a></li>
<li><a href="songs">ترانيم</a></li>
<li><a href="articles">مقالات</a></li>
<li class="has-dropdown">
    <a href="#">خدمات</a>
    <ul class="dropdown">
        <li><a href="#">أحداث مهمة</a></li>
        <li><a href="#">كتب</a></li>
        <li><a href="#">تأملات</a></li>
    </ul>
</li>
<li><a href="contact">تواصل</a></li>
<li><a href="donate">تبرع</a></li>

@endsection

@section('page_content')
<!-- Header -->
<aside id="fh5co-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="featured text-center animate-box" style="background-image: url(/imgs/img_bg_3.jpg);">
                    <div class="desc">
                        <span class="date">Dec 25, 2016</span>
                        <h3>Every Start has an End</h3>
                        <span class="category">Inspirational</span>
                    </div>
                </a>
            </div>

            <div class="col-md-8">
                <div class="flexslider animate-box">
                    <ul class="slides">
                        <li style="background-image: url(/imgs/img_bg_3.jpg);">
                            <div class="overlay-gradient"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 slider-text">
                                        <div class="slider-text-inner">
                                            <h1>Latest Resource </h1>
                                            <h2>Resource Title, Church <a href="sermons" target="_blank">Watch</a></h2>
                                            <p class="ct"><a href="#">Learn More <i class="icon-arrow-right"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</aside>

<div id="fh5co-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-padded-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fh5co-blog animate-box">
                            <div class="title title-pin text-center">
                                <span class="posted-on">Nov. 15th 2016</span>
                                <h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
                                <span class="category">Lifestyle</span>
                            </div>
                            <a href="#"><img class="img-responsive" src="/imgs/blog-1.jpg" alt=""></a>
                            <div class="blog-text text-center">
                                <p>Text here</p>
                                <ul class="fh5co-social-icons">
                                    <li>Share:</li>
                                    <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside id="sidebar">
                <div class="col-md-3">
                    <div class="side animate-box">
                        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                            <h2><span>Latest Posts</span></h2>
                        </div>
                        <div class="blog-entry">
                            <a href="#">
                                <img src="/imgs/blog-1.jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <span class="date">Dec. 25, 2016</span>
                                    <h3>Most Beautiful Site in 2016</h3>
                                </div>
                            </a>
                        </div>
                        <div class="blog-entry">
                            <a href="#">
                                <img src="/imgs/blog-2.jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <span class="date">Dec. 25, 2016</span>
                                    <h3>Most Beautiful Site in 2016</h3>
                                </div>
                            </a>
                        </div>
                        <div class="blog-entry">
                            <a href="#">
                                <img src="/imgs/blog-1.jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <span class="date">Dec. 25, 2016</span>
                                    <h3>Most Beautiful Site in 2016</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="side animate-box">
                        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                            <h2><span>Category</span></h2>
                        </div>
                        <ul class="category">
                            <li><a href="#"><i class="icon-check"></i>Lifestyle</a></li>
                            <li><a href="#"><i class="icon-check"></i>Web Development</a></li>
                            <li><a href="#"><i class="icon-check"></i>Web Design</a></li>
                            <li><a href="#"><i class="icon-check"></i>Nature</a></li>
                            <li><a href="#"><i class="icon-check"></i>Life</a></li>
                            <li><a href="#"><i class="icon-check"></i>Entertainment</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>

    </div>

    <aside id="fh5co-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
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
                <div class="col-md-3 ">
                    <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love" class="grid-x1-3 card">
                    </a>
                </div>
                <div class="col-md-6 ">
                    <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love" class="grid-x1-6 card">
                        <div class="card_label">
                            <div class="card_label_inner">
                                <h5>عظات</h3>
                            </div>
                        </div>
                        <div class="card_portrait_img_container">
                            <div class="card_portrait_img">
                                <img alt="When Does God Harden a Sinner’s Heart?"
                                    src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                                    data-src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                                    class=" lazyloaded">
                            </div>
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

            </div>
        </div>
    </aside>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="/imgs/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <img src="/imgs/quote-sign-left.png" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="/imgs/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="/imgs/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <img src="/imgs/quote-sign-left.png" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="/imgs/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="/imgs/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                        <img src="/imgs/quote-sign-left.png" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                        minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="/imgs/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="/imgs/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                        <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                        velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                        veniam.
                        <img src="/imgs/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="/imgs/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                        <img src="/imgs/quote-sign-left.png" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                        culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                        quid.
                        <img src="/imgs/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <div id='map-churches' class='map'>
        <iframe style="border:0; width: 100%; height: 500px;"
            src="https://www.google.com/maps/d/embed?mid=1BGMUfx5wvpfThi-ZRlyM2TVPXSEZF6QB" frameborder="0"
            allowfullscreen>
        </iframe>
    </div>

</div>

<!-- Footer -->
@endsection