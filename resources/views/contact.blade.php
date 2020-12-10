
@extends('layouts.layout')

@section('page_title')
<title>Contact</title>
@endsection

@section('active_index')
	<li><a href="/">@lang('titles.main')</a></li>
	<li><a href="jesus">@lang('titles.know_jesus')</a></li>
	<li><a href="sermons">@lang('titles.sermons')</a></li>
	<li><a href="hymns">@lang('titles.hymns')</a></li>
	<li><a href="articles">@lang('titles.articles')</a></li>
	<li class="has-dropdown">
		<a href="#">@lang('titles.other_services')</a>
		<ul class="dropdown">
			<li><a href="#">@lang('titles.events')</a></li>
			<li><a href="#">@lang('titles.books')</a></li>
			<li><a href="#">@lang('titles.devotions')</a></li>
		</ul>
	</li>
	<li><a href="about">@lang('titles.who_we_are')</a></li>
	<li class="active" ><a href="contact">@lang('titles.contact')</a></li>
	<li><a href="donate">@lang('titles.donate')</a></li>
@endsection

@section('page_content')

<div id="fh5co-contact" class="fh5co-no-pd-top">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>@lang('titles.contact_us')</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9 col-padded-right">
					<form action="#">
						<div class="form-group row">

							<div class="col-md-6 field">
								<label for="lastname">@lang('titles.last_name')</label>
								<input type="text" name="FName" id="lastname" class="form-control" placeholder="@lang('titles.optional_last_name') ...">
							</div>
							
							<div class="col-md-6 field">
								<label for="firstname">@lang('titles.first_name')</label>
								<input type="text" name="FName" id="firstname" class="form-control" placeholder="@lang('titles.optional_first_name') ...">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="email">@lang('titles.email')</label>
								<input type="text" name="FName" id="email" class="form-control" >
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
				
				<!-- <aside id="sidebar">
					<div class="col-md-3">
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>About Me</span></h2>
							</div>
							<div class="fh5co-staff">
								<img src="images/user-2.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Jean Smith</h3>
								<strong class="role">CEO, Founder</strong>
								<p>Quos quia provident conse culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.</p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</aside> -->

			</div>
		</div>
	</div>

	<!-- <div id="fh5co-instagram">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Instagram Posts</span></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 nopadding animate-box">
				<div class="insta" style="background-image: url(images/insta-1.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box">
				<div class="insta" style="background-image: url(images/insta-2.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box">
				<div class="insta" style="background-image: url(images/insta-3.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box">
				<div class="insta" style="background-image: url(images/insta-4.jpg);"></div>
			</div>
		</div>
	</div> -->

@endsection
<!-- Footer -->
