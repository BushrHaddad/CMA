@extends('layouts.layout')

@section('page_title')
<title>About</title>
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
<li class="active"><a href="about">@lang('titles.who_we_are')</a></li>
<li><a href="contact">@lang('titles.contact')</a></li>
<li><a href="donate">@lang('titles.donate')</a></li>

@endsection

@section('page_content')

<div id="CMA-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center CMA-heading">
					<h2><span>My Posts</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="CMA-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="CMA-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="CMA-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="CMA-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="CMA-blog animate-box">
						<div class="title text-center">
							<span class="posted-on">Nov. 15th 2016</span>
							<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
							<span class="category">Lifestyle</span>
						</div>
						<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
						<div class="blog-text text-center">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="CMA-social-icons">
								<li>Share:</li>
								<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
								<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="CMA-instagram">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center CMA-heading">
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
	</div>

	@endsection
<!-- Footer -->
