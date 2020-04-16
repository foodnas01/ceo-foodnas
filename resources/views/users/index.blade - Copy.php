@extends('layouts.app') 

@section('content')

<style type="text/css">
  
  div.dt-buttons {
    position: relative;
    float: right;
}

.dataTables_wrapper .dataTables_filter {
     float: left; 
     text-align: left; 
}
div.dt-button-background {
   /* position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 0% !important;*/
}

button.dt-button.buttons-collection.btn.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b;
    background: #545b62;
    width: 104px;
    font-size: 14px;
}

div.dt-buttons {
    position: relative;
    float: right;
    margin-right: 195px;
    margin-bottom: 40px;
}

</style>


<div class="row laravel-grid" id="user-grid">
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <h4 class="grid-title">Users Management</h4>
                </div>
               

            </div>
            <div class="card-body">
              
                        <div class="pull-right">


                            <a href="{{ route('users.create') }}" title="add new user" class="btn btn-success show_modal_form">
                                <i class="fa fa-plus-circle"></i> Create
                            </a>

                            <a href="http://laravel-grid.herokuapp.com/users" title="refresh table for users" class="btn btn-primary" data-trigger-pjax="1" data-pjax-target="#user-grid">
                                <i class="fa fa-refresh"></i> Refresh
                            </a>

                          

                        </div>
                  
               
                <div class="table-responsive grid-wrapper">
                    <table id="datatable1" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Roles</th>
                              <th width="280px">Action</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key => $user)
                          <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                  @if(!empty($user->getRoleNames())) @foreach($user->getRoleNames() as $v)
                                  <label class="badge badge-success">{{ $v }}</label>
                                  @endforeach @endif
                              </td>
                              <td>
                                  <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                  <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} {!! Form::close() !!}
                              </td>



                              <td>
                                <div class="pull-right">
                                    <a href="http://laravel-grid.herokuapp.com/users/725?ref=user-grid" title="view record" class="btn btn-outline-primary btn-sm grid-row-button show_modal_form">
                                        <i class="fa fa-eye"></i> View
                                    </a>

                                    <a href="http://laravel-grid.herokuapp.com/users/725?ref=user-grid" title="delete record" class="data-remote grid-row-button btn btn-outline-danger btn-sm" data-method="DELETE" data-trigger-confirm="1" data-pjax-target="#user-grid">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>

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



@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


{!! $data->render() !!}

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#datatable1').DataTable({
            dom: 'Bfrtip',
            extend: 'collection',
            buttons: [
              {
                extend: 'collection',
                autoClose: 'true',
                tag: 'img',
                attr: {
                    src: "{{asset('frontend/img/options.png')}}"
                },

                className: ' dropdown-toggle',
                text: 'Export',
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
              
            ]
            /*buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]*/
        });

        table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );

    });
</script>

@endsection