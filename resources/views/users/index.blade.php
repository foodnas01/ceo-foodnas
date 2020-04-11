@extends('layouts.app')


@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

{!! $grid !!}

<script type="text/javascript">
	$(".card-body").find(".col-md-6:first").html('');
</script>
@endsection