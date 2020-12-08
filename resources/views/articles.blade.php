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

<div id="fh5co-content">
    <div class="container">
        <div class="row">
            <!-- <aside id="sidebar"> -->

            <div class="side animate-box col-md-3">
                <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                    <h2><span>مواضيع</span></h2>
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

            <div class="col-md-9" id="sidebar">
                
                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                        <h2><span>مقالات</span></h2>
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
            </div>
            <!-- </aside> -->
        </div>
    </div>
</div>

<!-- Footer -->
@endsection