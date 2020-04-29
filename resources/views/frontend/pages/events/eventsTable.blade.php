<div class="col-md-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-right">
                    <h4 class="grid-title">{{ __('Event Management') }}</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive grid-wrapper">
                    <table id="datatable1" style="direction: rtl;" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                             
                              <th>{{ __('Title') }}</th>
                              <th>{{ __('Start Date') }}</th>
                              <th>{{ __('End Date') }}</th>
                              <th>{{ __('Seats') }}</th>
                              <th>{{ __('Price') }}</th>
                              <th>{{ __('Rating') }}</th>
                              <th>{{ __('Host Name') }}</th>
                              <th>{{ __('Country') }}</th>
                              <th>{{ __('State') }}</th>
                              <th>{{ __('City') }}</th>
                              <th>{{ __('image') }}</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $key => $event)
                          <tr>
                          
                       
                              <td>{{ $event->title }}</td>
                              <td>{{ $event->start_date }}</td>
                              <td>{{ $event->end_date }}</td>
                              <td>{{ $event->total_seates }}</td>
                              <td>{{ $event->price }}</td>
                              <td>{{ $event->rating }}</td>
                              <td>{{ $event->host_name }}</td>
                              <td>{{ $event->countries->name }}</td>
                              <td>{{ $event->states->name }}</td>
                              <td>{{ $event->cities->name }}</td>
                              <td><img src={{url('/uploads/events_images/'.$event->image)}} alt="No Image" width="60" height="60" alt=""/></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>


                </div>
            </div>
            
        </div>
    </div>

