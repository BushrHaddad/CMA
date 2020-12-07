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
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Arabic Name</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($results as $result)
        <tr>
            <th> {{$result->id}}</th>
            <th> {{$result->name}}</th>
            <th> {{$result->name_er}}</th>
            <th> <a href="{{url('/edit/'.$result->id)}}" class="btn btn-success">Update</a></th>
        </tr>
        @endforeach

    </tbody>
</table>

<!-- Footer -->
@endsection