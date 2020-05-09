@extends('layouts.template')
@section('style')
    <style type="text/css">

        #headerText{
            padding-top: 120px;
        }

    </style>
@stop
@section('content')
	<main>
		
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>
					{{ $about->title }}
					</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>{{ $about->title }}</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('uploads/about_images/'.$about->featured_image)}}" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5" id="msgContent">
						{!! $about->content !!}	
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our founders</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="carousel" class="owl-carousel owl-theme">
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Julia Holmes<em>CEO</em></h4>
						</div><img src="img/1_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Lucas Smith<em>Marketing</em></h4>
						</div><img src="img/2_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Paul Stephens<em>Business strategist</em></h4>
						</div><img src="img/3_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Pablo Himenez<em>Customer Service</em></h4>
						</div><img src="img/4_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#0">
						<div class="title">
							<h4>Andrew Stuttgart<em>Admissions</em></h4>
						</div><img src="img/5_carousel.jpg" alt="">
					</a>
				</div>
			</div>
			<!-- /carousel -->
		</div>
		<!--/container-->
	</main>

	    <!-- Conent Section end -->
@endsection

@section('script')
<script type="text/javascript">
	
	         CKEDITOR.replace('msgContent',
{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true,
}


</script>


@stop