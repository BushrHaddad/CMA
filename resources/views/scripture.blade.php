@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="topics">
    <div class="grid-container">
        <div class="grid-full">
            <div class="grouping-index">
                @foreach($results as $k => $v)
                @if($v['ch_b'] !== NULL)
                <h2>
                    {{ $v['data_tash'] }}
                </h2>

                @elseif($v['sub_tit_val'] !== NULL)
                <h3>
                    {{ $v['sub_tit_val'] }}
                </h3>
                <p>
                    <?php 
                                    $v['data_tash'] = preg_replace('/\d+/', '', $v['data_tash'] );
                                ?>
                    {{ $v['data_tash'] }}
                </p>
                @else
                <p>
                    <?php 
                                    $v['data_tash'] = preg_replace('/\d+/', '', $v['data_tash'] );
                                ?>
                    {{ $v['data_tash'] }}
                </p>
                @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection