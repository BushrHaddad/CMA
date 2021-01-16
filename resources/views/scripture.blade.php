@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="topics">
    <div class="grid-container">
        <div class="grid-full">
            <div class="grouping-index">
                @foreach($res['chapter'] as $k => $v)
                @if($v['ch_b'] !== NULL)
                <h2 class="chapter_title">
                    {{ $v['data_tash'] }}
                </h2>

                @elseif($v['sub_tit_val'] !== NULL)
                <h3 class="verse_title">
                    {{ $v['sub_tit_val'] }}
                </h3>
                <span class="verse">
                    {{ $v['data_tash'] }}
                </span>
                @else
                <span class="verse">
                
                    {{ $v['data_tash'] }}                
                </span>

                @endif
                @endforeach

            </div>
        </div>
    </div>
</div>


<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="CMA-sidebar">
                <div class="side animate-box">
                    @foreach($res['chapter_resources'] as $k => $v)
                    <div class="blog-entry">
                        <a href="{{route('resource',$v['id'])}}" >
                            <img src="/imgs/blog-2.jpg" class="img-responsive" alt="">
                            <div class="body">
                                <span class="date">{{ \Carbon\Carbon::parse($v['created'])->format('jS F Y') }}</span>
                                <h3> {{ $v['name'] }} </h3>
                                <span class="desc" > {{ $v['desc'] }}</span>
                            </div>
                            <div class="footer"></div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pagination -->
        </div>
    </div>
</div>


@endsection