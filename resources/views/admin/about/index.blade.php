

@extends('layouts.app') 


@section('datatable_custom')
<link rel="stylesheet" href="{{ asset('frontend/css/datatable_custom.css') }}">

@endsection

@section('content')


@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ __('Success') }}!</strong> {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@include('frontend/pages/model')

<div class="row laravel-grid" id="event-grid">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h4 class="grid-title">{{ __('About Us') }}</h4>
                </div>

                <div class="pull-left">


                            <a href="javascript:void(0)" title="add new event" class="btn btn-success show_modal_form">
                                <i class="fa fa-plus-circle"></i> {{ __('Create') }}
                            </a>

                        </div>
               

            </div>
            <div class="card-body">
                <div class="table-responsive grid-wrapper">


                    <table id="datatable1" style="direction: rtl;" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>{{ __('No') }}</th>
                              <th>{{ __('Title') }}</th>
                              <th>{{ __('Content') }}</th>
                              <th>{{ __('Featured Image') }}</th>
                              <th width="280px">{{ __('Action') }}</th>
                          </tr>
                      </thead>
                      <tbody>
                           @foreach ($abouts as $key => $about)
                          <tr>
                          
                              <td>{{ ++$key }}</td>
                              <td>{{ $about->title }}</td>
                              <td>
                              {{  strip_tags(html_entity_decode($about->content)) }} </td>
                              <td><img src={{url('/uploads/about_images/'.$about->featured_image)}} alt="No Image" width="60" height="60" alt=""/></td>
                              <td>
                                <div class="pull-left">
                                    <a href="javascript:void(0)" data-url = "{{ route('about.edit',$about->id) }}" onclick="editPopup(this,'{{$about->id}}')" title="update record" class="btn btn-outline-primary btn-sm grid-row-button">
                                        <i class="fa fa-eye"></i> {{ __('Edit') }}
                                    </a>
                                   
	                                    {!! Form::open(['method' => 'DELETE','route' => ['about.destroy', $about->id],'id'=>$about->id,'style'=>'display:inline']) !!} 
	                                    <button type="button" onclick="deletePopup(this,'{{$about->id}}')" class="data-remote grid-row-button btn btn-outline-danger btn-sm">
	                                      <i class="fa fa-trash"></i> {{ __('Delete') }}
	                                      
	                                    </button>
                                                                  
 									                {!! Form::close() !!}

                                </div>
                            </td>


                          </tr>
                          @endforeach
                      </tbody>
                  </table>


                </div>
            </div>
            
        </div>
    </div>
</div>







<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#datatable1').DataTable({
          "language": {
            "url": "{{asset('lang/Arabic.json')}}"
        },
            dom: 'Bfrtip',
            extend: 'collection',
            buttons: [
              {
                extend: 'collection',
                autoClose: 'true',
                text: '{{ __('Export') }}',
                tag: 'span',

                className: 'fa fa-download btn btn-primary dropdown-toggle',
                buttons: [
                  {
                    extend: 'csvHtml5',
                    className: 'dropdown-item'
                  },
                  {
                    extend: 'excelHtml5',
                    className: 'dropdown-item'
                  },
                  {
                    extend: 'copyHtml5',
                    className: 'dropdown-item'
                  },
                  {
                    extend: 'pdfHtml5',
                    className: 'dropdown-item'
                  }
                ]
              },
              
            ],

            /*buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]*/
        });

        table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

    });
</script>

<script type="text/javascript">

  $(".show_modal_form").click(()=>{
      $.ajax({
           type:'GET',
           url:"{{ route('about.create') }}",
           success:function(data){

              $("#popupTitle").html("{{ __('Create AboutUs') }}");
              $("#modalPoppup").modal("show");
              $("#popupBody").html(data);

           }
        });
  });

 editPopup = (obj,id) => {
    $.ajax({
           type:'GET',
           url:$(obj).attr("data-url"),
           success:function(data){
              $("#popupTitle").html("{{ __('Update AboutUs') }}");
              $("#modalPoppup").modal("show");
              $("#popupBody").html(data);
           }
        });
 }

 deletePopup = (obj,id) =>{
    $("#popupTitle").html("{{ __('Delete AboutUs') }}");
    $("#modalPoppup").modal("show");

     let myHtml = '<div> {{ __("Are You sure you want to delete the about us page ?") }}<br />';
        myHtml += '<div class="modal-footer" style="0px solid;margin-top:15px;"><button type="button" id="btnDelete" onclick="confirmDelete('+id+')" class="btn btn-primary">{{ __("Yes") }}</button>';
        myHtml += '<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("No") }}</button>';
        myHtml   += '</div></div>';
    $("#popupBody").html(myHtml);
}

confirmDelete = (id) => {
  $("#"+id).submit();
}




</script>

@endsection