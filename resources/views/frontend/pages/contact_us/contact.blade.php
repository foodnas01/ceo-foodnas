@extends('layouts.template')
@section('style')
    <style type="text/css">

        #headerText{
            padding-top: 120px;
        }
        strong {
        	font-size: 20px;
        }

        label{
        	text-align: right;
        }

    </style>
@stop
@section('content')





	<main>
		
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>
					Contact Us
					</h1>
				</div>
			</div>
		</section>

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Email address</h4>
						<span>support@Panagea.com - info@Panagea.com<br><small>Monday to Friday 9am - 7pm</small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br><small>Monday to Friday 9am - 7pm</small></span>
					</li>
				</ul>
			</div>
		</div>



		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="map_contact">
							 <div id="map"></div>
						</div>
						<!-- /map -->
					</div>
					<div class="col-lg-6">

						 @if ($message = Session::get('success'))
	                        <div class="alert alert-success alert-dismissible fade show" role="alert">
	                          <strong>{{ __('Success') }}!</strong> {{ $message }}
	                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            <span aria-hidden="true">&times;</span>
	                          </button>
	                        </div>
	                        @endif

	                          @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <strong>{{ __('Whoops!') }}</strong>{{ __('There were some problems with your input.') }}<br><br>
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                  </div>
                                @endif


						<h4>{{__('Call us')}}</h4>
						<p>{{__('contact message')}}</p>
						<div id="message-contact"></div>

						{!! Form::open(array('route' => 'user_contact','id'=>'userForm','method'=>'POST','enctype'=>'multipart/form-data')) !!}
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>{{__('First Name')}}</label>
										<input class="form-control" type="text" id="first_name" name="first_name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>{{__('Last Name')}}</label>
										<input class="form-control" type="text" id="last_name" name="last_name">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>{{__('Email')}}</label>
										<input class="form-control" type="email" id="email" name="email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>{{__('Phone')}}</label>
										<input class="form-control" type="text" id="phone" name="phone">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="form-group">
								<label>{{__('Message')}}</label>
								<textarea class="form-control" id="message" name="message" style="height:150px;"></textarea>
							</div>
							<p class="add_top_30"><input type="submit" value="{{ __('messages.Submit') }}" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		<!--/container-->
	</main>
	    <!-- Conent Section end -->
@endsection

@section('script')

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>


    <style type="text/css">
      html, body, #map { height: 100%; margin: 0; }
    </style>
    <script type="text/javascript">
    	initialize();
    function initialize() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(
            document.getElementById('map'));
        map.setCenter(new GLatLng(37.4419, -122.1419), 13);
        map.setUIToDefault();

        map.addOverlay(new GMarker(new GLatLng(37.4419, -122.1419)));

      }
    }
    </script>
  </head>


@stop