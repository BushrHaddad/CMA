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
