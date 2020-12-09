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
                      <div class="col-md-4">
                        <div class="fh5co-blog animate-box">
                            <div class="title text-center">
                                <span class="posted-on">{{ date("m.d.y", strtotime($result->created_at) ) }}</span>
                                <h3><a href="#">{{$result->name}}</a></h3>
                            </div>
                            <a href="#"><img class="img-responsive" src="/imgs/blog-1.jpg" alt=""></a>
                            <div class="blog-text text-center">
                                <ul class="fh5co-social-icons">
                                    <li>شارك</li>
                                    <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
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