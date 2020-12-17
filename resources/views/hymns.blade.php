@extends('layouts.layout')

@section('page_content')

<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="CMA-sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>ترانيم</span></h2>
                    </div>

                    @foreach($results as $result)
                    <div class="col-md-4">
                        <div class="CMA-blog animate-box">
                            <div class="title text-center">
                                <span class="posted-on">{{ date("m.d.y", strtotime($result->created_at)) }}</span>
                                <h3><a href="#">{{$result->name}}</a></h3>
                            </div>
                            <a href="#"><img class="img-responsive" src="/imgs/blog-1.jpg" alt=""></a>
                            <div class="blog-text text-center">
                                <ul class="CMA-social-icons">
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