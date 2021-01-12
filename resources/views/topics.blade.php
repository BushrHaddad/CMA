@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div class="indexes row">

    <div class="selected">
        <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>Arrow</title>
            <g stroke="none" stroke-width="2" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g sketch:type="MSArtboardGroup" fill="#333333">
                    <path
                        d="M12.5150732,6.35018478 C12.3229538,6.15543439 12.3232472,5.83997845 12.5157285,5.64559421 C12.7082098,5.45120998 13.0199903,5.45150681 13.2121097,5.6462572 L17.6528114,10.1477717 L18,10.4997148 L17.6528319,10.8516786 L13.2121302,15.3537221 C13.0200221,15.5484839 12.7082416,15.5487993 12.515749,15.3544265 C12.3232564,15.1600537 12.3229447,14.8445977 12.5150528,14.6498359 L16,11 L2,11 L2,10 L16,10 L12.5150732,6.35018478 L12.5150732,6.35018478 L12.5150732,6.35018478 Z"
                        sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
        <a href="">
            @lang('titles.all_resources')
        </a>
    </div>

    <div>
        <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>Arrow</title>
            <g stroke="none" stroke-width="2" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g sketch:type="MSArtboardGroup" fill="#333333">
                    <path
                        d="M12.5150732,6.35018478 C12.3229538,6.15543439 12.3232472,5.83997845 12.5157285,5.64559421 C12.7082098,5.45120998 13.0199903,5.45150681 13.2121097,5.6462572 L17.6528114,10.1477717 L18,10.4997148 L17.6528319,10.8516786 L13.2121302,15.3537221 C13.0200221,15.5484839 12.7082416,15.5487993 12.515749,15.3544265 C12.3232564,15.1600537 12.3229447,14.8445977 12.5150528,14.6498359 L16,11 L2,11 L2,10 L16,10 L12.5150732,6.35018478 L12.5150732,6.35018478 L12.5150732,6.35018478 Z"
                        sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
        <a href="">
            @lang('titles.scriptures')
        </a>

    </div>

    <div>
        <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>Arrow</title>
            <g stroke="none" stroke-width="2" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g sketch:type="MSArtboardGroup" fill="#333333">
                    <path
                        d="M12.5150732,6.35018478 C12.3229538,6.15543439 12.3232472,5.83997845 12.5157285,5.64559421 C12.7082098,5.45120998 13.0199903,5.45150681 13.2121097,5.6462572 L17.6528114,10.1477717 L18,10.4997148 L17.6528319,10.8516786 L13.2121302,15.3537221 C13.0200221,15.5484839 12.7082416,15.5487993 12.515749,15.3544265 C12.3232564,15.1600537 12.3229447,14.8445977 12.5150528,14.6498359 L16,11 L2,11 L2,10 L16,10 L12.5150732,6.35018478 L12.5150732,6.35018478 L12.5150732,6.35018478 Z"
                        sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
        <a href="">
            @lang('titles.topics')

        </a>
    </div>

    <div>
        <svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
            <title>Arrow</title>
            <g stroke="none" stroke-width="2" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                <g sketch:type="MSArtboardGroup" fill="#333333">
                    <path
                        d="M12.5150732,6.35018478 C12.3229538,6.15543439 12.3232472,5.83997845 12.5157285,5.64559421 C12.7082098,5.45120998 13.0199903,5.45150681 13.2121097,5.6462572 L17.6528114,10.1477717 L18,10.4997148 L17.6528319,10.8516786 L13.2121302,15.3537221 C13.0200221,15.5484839 12.7082416,15.5487993 12.515749,15.3544265 C12.3232564,15.1600537 12.3229447,14.8445977 12.5150528,14.6498359 L16,11 L2,11 L2,10 L16,10 L12.5150732,6.35018478 L12.5150732,6.35018478 L12.5150732,6.35018478 Z"
                        sketch:type="MSShapeGroup"></path>
                </g>
            </g>
        </svg>
        <a href="">
            @lang('titles.alliance_churches')
        </a>
    </div>

</div>

<div class=search-div>
    <form class="search-query" id="form" method="POST" action="{{route('search')}}">
        @csrf
        <div class="field">
            <input type="text" placeholder="@lang('titles.search') ..." name="query" id="search-query"
                class="form-control">

        </div>
    </form>
</div>


<div id="topics">
    <div class="grid-container">
        <div class="grid-full">
            <div class="grouping-index">
                <ol class="taxonomy-list">@foreach($results as $testament => $v)<li><a>
                            <div>
                                <h2>{{ $testament }}</h3>
                            </div>
                        </a>
                        <ol>@foreach ($v['book'] as $book => $v1)<li><a>
                                    <div>
                                        <h3>{{ $book }}</h3>
                                    </div>
                                </a>
                                <ol>
                                @foreach ($v1 as $chapter => $v2)
                                    <li>
                                        @if($chapter !== 'book_num' ) 
                                            <a href="{{ route('scripture',['testament'=> $v['testament_num'], 'book' => $v1['book_num'], 'chapter' => $chapter]) }}">
                                                <div>
                                                    <h3>@lang('titles.chapter') {{ $chapter }}</h3>
                                                </div><span>({{ $v2 }})</span>
                                            </a>
                                        @endif
                                    </li>
                                    @endforeach</ol>
                            </li>@endforeach</ol>
                    </li>@endforeach</ol>
            </div>
        </div>
    </div>
</div>

@endsection