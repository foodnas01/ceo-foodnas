@extends('layouts.app')


@section('content')



@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert">×</a>
        <p>{{ $message }}</p>
    </div>
@endif

@if(Session::has('successRole'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Success</strong> {!!Session::get('successRole')!!}
        </div>

@endif



{!! $grid !!}


<script type="text/javascript">
    $(".card-body").find(".col-md-6:first").html('');
</script>

@endsection