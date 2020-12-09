@extends('layouts.layout')

@section('page_title')
<title>Alliance Church-Syria & Lebanon</title>
@endsection

@section('active_index')
<li><a href="/">الرئيسية</a></li>
<li><a href="jesus">تعرف على يسوع</a></li>
<li><a href="sermons">عظات</a></li>
<li class="active"><a href="hymns">ترانيم</a></li>
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
            <div class="col-md-12" id="sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
                        <h2><span>ترانيم</span></h2>
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
        
        </div>
        {{$results->links()}}
    </div>
</div>

<!-- Footer -->
@endsection