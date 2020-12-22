@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="side animate-box col-md-3">
                <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                    <h2><span>@lang('titles.topics')</span></h2>
                </div>
                <ul class="category">

                    @for($i = 0 ; $i< 5 ; $i++) 
                        <li><a href="#"><i class="icon-check"></i>Topic</a></li>
                     @endfor
                </ul>
            </div>

            <div class="col-md-9" id="CMA-sidebar">

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>@lang('titles.articles')</span></h2>
                    </div>

                    @foreach($results as $result)
                    <div class="blog-entry">
                        <a href="#">
                            <!-- <img src="/imgs/blog-2.jpg" class="img-responsive" alt=""> -->
                            <div class="desc">
                                <span class="date">{{ date("m.d.y", strtotime($result->created_at) ) }}</span>
                                <h3>{{$result->name}}</h3>
                                <!-- <h5>{{$result->desc}}</h3> -->
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


@endsection
