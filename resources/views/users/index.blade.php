@extends('layouts.app') 


@section('datatable_custom')
<link rel="stylesheet" href="{{ asset('frontend/css/datatable_custom.css') }}">
@endsection

@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@include('frontend/pages/model')

<div class="row laravel-grid" id="user-grid">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h4 class="grid-title">{{ __('Users Management') }}</h4>
                </div>

                <div class="pull-right">


                            <a href="javascript:void(0)" title="add new user" class="btn btn-success show_modal_form">
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
                              <th>{{ __('Name') }}</th>
                              <th>{{ __('Email') }}</th>
                              <th>{{ __('Phone') }}</th>
                              <th>{{ __('Roles') }}</th>
                              <th width="280px">{{ __('Action') }}</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key => $user)
                          <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->phone_no }}</td>
                              <td>
                                  @if(!empty($user->getRoleNames())) @foreach($user->getRoleNames() as $v)
                                  <label class="badge badge-success">{{ $v }}</label>
                                  @endforeach @endif
                              </td>
                              <td>
                                <div class="pull-left">
                                    <a href="javascript:void(0)" data-url = "{{ route('users.edit',$user->id) }}" onclick="editPopup(this,'{{$user->id}}')" title="update record" class="btn btn-outline-primary btn-sm grid-row-button">
                                        <i class="fa fa-eye"></i> {{ __('Edit') }}
                                    </a>

                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'id'=>$user->id,'style'=>'display:inline']) !!} 
                                    <button type="button" onclick="deletePopup(this,'{{$user->id}}')" class="data-remote grid-row-button btn btn-outline-danger btn-sm">
                                      <i class="fa fa-trash"></i> {{ __('Delete') }}
                                      
                                    </button>
                                 


<!--                                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
 -->                                     
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






{!! $data->render() !!}

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
           url:"{{ route('users.create') }}",
           success:function(data){
              console.log(data);

              $("#popupTitle").html("{{ __('Create User') }}");
              $("#modalPoppup").modal("show");
              $("#popupBody").html(data);

           }
        });
  });

 editPopup = (obj,id) => {
  console.log($(obj).attr("data-url"))
    $.ajax({
           type:'GET',
           url:$(obj).attr("data-url"),
           success:function(data){
              $("#popupTitle").html("{{ __('Update User') }}");
              $("#modalPoppup").modal("show");
              $("#popupBody").html(data);
           }
        });
 }

 deletePopup = (obj,id) =>{
    $("#popupTitle").html("{{ __('Delete User') }}");
    $("#modalPoppup").modal("show");

     let myHtml = '<div> {{ __("Are You sure you want to delete the user ?") }}<br />';
        myHtml += '<div class="modal-footer" style="0px solid;margin-top:15px;"><button type="button" onclick="confirmDelete('+id+')" class="btn btn-primary">{{ __("Yes") }}</button>';
        myHtml += '<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("No") }}</button>';
        myHtml   += '</div></div>';
    $("#popupBody").html(myHtml);
}

confirmDelete = (id) => {
  $("#"+id).submit();
}
</script>

@endsection