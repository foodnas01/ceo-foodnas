@extends('layouts.template')
@section('style')
    <style type="text/css">

        #headerText{
            padding-top: 120px;
        }
        strong {
        	font-size: 20px;
        }

    </style>
@stop
@section('content')


@if(empty($about))
<main>

<div class="bg_color_1">
<div class="container margin_80_55">
	<div class="main_title_2">
		<span><em></em></span>
		<h2>No Record Found</h2>
	</div>
	</div>
</div>



</main>

	
@else if


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
					<!-- <div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{asset('uploads/about_images/'.$about->featured_image)}}" class="img-fluid" alt="">
						</figure>
					</div> -->
					<div class="col-lg-12" id="msgContent">
						{!! $about->content !!}	
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

		
		<!--/container-->
	</main>

	@endif

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