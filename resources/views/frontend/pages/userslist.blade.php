 <table id="datatable1" style="direction: rtl;" class="table table-bordered table-hover">
  <thead>
      <tr>
          <th>{{ __('No') }}</th>
          <th>{{ __('Name') }}</th>
          <th>{{ __('Email') }}</th>
          <th>{{ __('Country') }}</th>
          <th>{{ __('City') }}</th>
          <th>{{ __('Phone') }}</th>
          <th>{{ __('Skills') }}</th>
          <th>{{ __('Level') }}</th> 
      </tr>
  </thead>
  <tbody>
      @foreach ($users as $key => $eachUser)
      <tr>
      
          <td>{{ ++$key }}</td>
          <td>{{ $eachUser->first_name }}</td>
          <td>{{ $eachUser->email }}</td>
          <td>{{ $eachUser->country }}</td>
          <td>{{ $eachUser->city }}</td>
          <td>{{ $eachUser->phone }}</td>
          <td>{{ $eachUser->skills }}</td>
          <td>{{ $eachUser->level }}</td>
      </tr>
      @endforeach
  </tbody>
</table>