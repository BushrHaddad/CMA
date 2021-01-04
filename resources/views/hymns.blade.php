@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="animate-box">
                <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                    <h2><span>@lang('titles.hymns')</span></h2>
                </div>

                @foreach($results as $result)
                <a href="{{route('resource',$result->id)}}">
                    <div class="col-md-4">
                        <div class="CMA-blog animate-box">
                            <div class="title text-center">
                                <span class="posted-on">{{ date("m.d.y", strtotime($result->created_at)) }}</span>
                                <h3>{{$result->name}}</h3>
                            </div>
                            <img class="img-responsive" src="/imgs/blog-1.jpg" alt="">
                            <div class="blog-text text-center">
                                <ul class="CMA-social-icons">
                                    <li>شارك</li>
                                    <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- Pagination -->

        </div>
        {{$results->links()}}
    </div>
</div>

<!-- Footer -->
@endsection