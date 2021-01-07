@extends('layouts.layout')

@section('page_content')
<div class="specific-header"></div>

<div id="CMA-topics">
    <div class="grid-container">
        <div class="grid-full">
            <div class="grouping-index">
                <ol class="taxonomy-list">
                @foreach($results as $testament => $v) 
                    <li>
                        <a >
                            <div>
                                <h3>
                                    {{ $testament }}
                                </h3>
                            </div>
                        </a>
                        <ol >
                            @foreach ($v as $book => $v1) 
                                <li>
                                    <a href="/scripture/genesis">
                                        <div>
                                            <h3>
                                                {{ $book }}
                                            </h3>
                                        </div>

                                    </a>
                                    <ol>
                                        @foreach ($v1 as $chapter => $v2) 
                                            <li>
                                                <a href="/scripture/genesis/1">
                                                    <div>
                                                        <h3>
                                                            @lang('titles.chapter') {{ $chapter }}
                                                        </h3>
                                                    </div>
                                                    <span>({{ $v2 }})</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ol>
                                </li>
                            @endforeach
                        </ol>
                    </li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>



@endsection