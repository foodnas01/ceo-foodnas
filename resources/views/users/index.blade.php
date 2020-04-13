@extends('layouts.app')


@section('content')



@if(Session::has('success'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Success</strong> {!!Session::get('success')!!}
        </div>

@endif

@if(Session::has('success01'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Success</strong> {!!Session::get('success01')!!}
        </div>

@endif


{!! $grid !!}

<script type="text/javascript">
	$(".card-body").find(".col-md-6:first").html('');
</script>

@endsection


@section('grid_js')
   <script type="text/javascript">
        <?php  Session::forget('success') ?>
	</script>
@endsection