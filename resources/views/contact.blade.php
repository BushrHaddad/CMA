@extends('layouts.layout')

@section('page_content')

<div id="CMA-contact" class="CMA-no-pd-top">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-12 col-md-offset-0 text-center CMA-heading">
                <h2><span>@lang('titles.contact_us')</span></h2>
            </div>
        </div>
        <div class="row" id="form">
            <div class="col-md-9 col-padded-right">
                <form action="#">
                    <div class="form-group row">

                        <div class="col-md-6 field">
                            <label for="lastname">@lang('titles.last_name')</label>
                            <input type="text" name="FName" id="lastname" class="form-control"
                                placeholder="@lang('titles.optional_last_name') ...">
                        </div>

                        <div class="col-md-6 field">
                            <label for="firstname">@lang('titles.first_name')</label>
                            <input type="text" name="FName" id="firstname" class="form-control"
                                placeholder="@lang('titles.optional_first_name') ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 field">
                            <label for="email">@lang('titles.email')</label>
                            <input type="text" name="FName" id="email" class="form-control">
                        </div>
                        <div class="col-md-6 field">
                            <label for="phone">@lang('titles.phone')</label>
                            <input type="text" name="FName" id="phone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 field">
                            <label for="message">@lang('titles.message')</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 field">
                            <input type="submit" id="submit" class="btn btn-primary" value="@lang('titles.send')">
                        </div>
                    </div>
                </form>
            </div>

            <aside id="CMA-sidebar">
                <div class="info">
                    <div>
                        <h3>@lang('titles.location')</h3>
                        <p>@lang('titles.main_church_address')</p>
                    </div>

                    <div>
                        <h3>@lang('titles.email')</h3>
                        <p>nourelalam2011@gmail</p>
                    </div>

                    <div>
                        <h3>@lang('titles.phone')</h3>
                        <p>011-4422311</p>
                    </div>

                </div>
            </aside>

        </div>

    </div>

    <div id="overlay" class="map church-maps">
        <iframe style="border:0; width: 100%; height: 500px;"
            src="https://www.google.com/maps/d/embed?mid=1BGMUfx5wvpfThi-ZRlyM2TVPXSEZF6QB" frameborder="1"
            allowfullscreen>
        </iframe>
    </div>

    <script>
    $(document).ready(function() {

        $('#map').addClass('scrolloff'); // set the mouse events to none when doc is ready

        $('#overlay').on("mouseup", function() { // lock it when mouse up
            $('#map').addClass('scrolloff');
            //somehow the mouseup event doesn't get call...
        });
        $('#overlay').on("mousedown", function() { // when mouse down, set the mouse events free
            $('#map').removeClass('scrolloff');
        });

        $("#map").mouseleave(function() { // becuase the mouse up doesn't work... 
            $('#map').addClass(
            'scrolloff'); // set the pointer events to none when mouse leaves the map area
            // or you can do it on some other event
        });

    });
    </script>

</div>
@endsection