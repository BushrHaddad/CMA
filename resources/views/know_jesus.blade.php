@extends('layouts.layout')

@section('page_content')

<div>
    <div class="masthead" style="background-image: url(/imgs/slide5.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>@lang('titles.know_jesus')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image img1">
        <div class="bg-text">TEXT</div>

    </div>
    

    <div class="resource-text">
        <!-- Article Title -->
        <h1>
            Resource Title
        </h1>
        <!-- Article Description or Text -->
        Resource Text
    </div>
    <hr style="height: .2px; background-color:gray">
    <div class="resource-footer">
    </div>
</div>

<!-- Footer -->
@endsection